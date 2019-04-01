<?php

namespace App\Http\Controllers;
use App\booking;
use Illuminate\Http\Request;

use DB; 

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('student.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req)
    {
       /*
          $data = [
           'firstname'=>request('firstName'),
           'lastName'=>request('lastName'),
            'email'=>request('email'),
            'roomType'=>request('roomType'),
            'checkIntime'=>request('checkIntime'),
            'timeIn'=>request('timeIn'),
            'checkOuttime'=>request('checkOuttime'),
            'timeOut'=>request('timeOut'),
            'numOfguests'=>request('numOfguests')

           
        ];

             \DB::table('bookings')->insert($data);
             return back();

*/

          $firstName = $req->input('firstName');
          $lastName = $req->input('lastName');
          $email = $req->input('email');
          $roomType = $req->input('roomType');
          $checkIntime = $req->input('checkIntime');
          $timeIn = $req->input('timeIn');
          $checkOuttime = $req->input('checkOuttime');
          $timeOut = $req->input('timeOut');
          $numOfguests = $req->input('numOfguests');
          
     
     

          $data = array(

            "firstName"=>$firstName,
            "lastName"=>$lastName,
            "email"=>$email,
            "roomType"=>$roomType,
            "checkIntime"=>$checkIntime,
            "timeIn"=>$timeIn,
            "checkOuttime"=>$checkOuttime,
            "timeOut"=>$timeOut,
            "numOfguests"=>$numOfguests,
          );

         $id = \DB::table('bookings')->insertGetId($data);
         echo '<script type="text/javascript">alert(' + $id + ');</script>';
           return back();
          



        //  booking::create($data);

       /*

      $this->validate($request,[
           'firstName'=>'required',
           'lastName'=>'required',
          'email'=>'required',
           'roomType'=>'required',
          'checkIntime'=>'required',
           'timeIn'=>'required',
          'checkOuttime'=>'required',
           'timeOut'=>'required',
           'numOfguests'=>'required'
        
        ]);

        $booking = new booking;
        $booking->firstName = $request->input('firstName');
        $booking->lastName = $request->input('lastName');
        $booking->email = $request->input('email');
        $booking->roomType = $request->input('roomType');
        $booking->checkIntime = $request->input('checkIntime');
        $booking->timeIn = $request->input('timeIn');
        $booking->checkOuttime = $request->input('checkOuttime');
        $booking->timeOut = $request->input('timeOut');
        $booking->numOfguests = $request->input('numOfguests');
        $booking->save();



    //    return 'validation passed';

        */    
    }
/*
    public function insert(Request $req)
    {
       $first_name = $req->input('first_name');
       $last_name = $req->input('last_name');
     //  $e-mail = $req->input('e-mail');
       $Room_Type = $req->input('Room_Type');
      // $Check_In_&_Time = $req->input('Check_In_&_Time');
       $time_in = $req->input('time_in');
      // $Check_Out_&_Time = $req->input('Check_Out_&_Time');
       $time_out = $req->input('time_out');
       $Number_of_Guests = $req->input('Number_of_Guests');

       $data = array(

           'first_name'=>$first_name,
            'last_name'=>$last_name,
           // 'e-mail'=>$e-mail,
            'Room_Type'=>$Room_Type,
           // 'Check_In_&_Time'=>$Check_In_&_Time,
            'time_in'=>$time_in,
           // 'Check_Out_&_Time'=>$Check_Out_&_Time,
            'time_out'=>$time_out,
            'Number_of_Guests'=>$Number_of_Guests);

       DB::table('bookings')->insert($data);

       echo"succes";
       
        
    }  */
/*
     public function insert(Request $req){
    
       $first_name = $req->input('first_name');
       $last_name = $req->input('last_name');
     
       $data = array(

           'first_name'=>$first_name,
            'last_name'=>$last_name,
           );

       DB::table('test')->insert($data);

       echo"succes";
       
        
    } */ 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
