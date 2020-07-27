<?php

namespace App\Http\Controllers;

use App\UserDetails;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\ProfileController;

class UserDetailsController extends Controller
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
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this -> validate($request, array(
            'bloodG' => '',
            'tel' => '',
            'emgno' => '',
            'Gender' => '',
            'address' => '',
            'city' => '',
            'nic' => '',
            'dob' => '',
            'maritalstatus' => '',
            'user_id' => ''
        ));
        
        
        $userdetails = new UserDetails;
        
        $userdetails->user_id = $request->user_id;
        $userdetails->bloodG = $request->bloodG;
        $userdetails->phone = $request->tel;
        $userdetails->emergency_number = $request->emgno;
        $userdetails->gender = $request->Gender;
        $userdetails->address = $request->address;
        $userdetails->city = $request->city;
        $userdetails->nic = $request->nic;
        $userdetails->dob = $request->dob;
        $userdetails->maritalstatus = $request->maritalstatus;
        
        $userdetails->save();

        return redirect()->action('${App\Http\Controllers\UserDetailsController@edit}');
        return redirect()->route('userdetails.edit');
        // return view('profile.edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table('users')->where('id', auth()->user()->id)->first();
        $userdetails = DB::table('user_details')->where('user_id', auth()->user()->id)->first();




        return view('profile.userdetails')->with('user', $user)->with('userdetails', $userdetails);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // validate data
        $this -> validate($request, array(
            'bloodG' => '',
            'tel' => '',
            'emgno' => '',
            'Gender' => '',
            'address' => '',
            'city' => '',
            'nic' => '',
            'dob' => '',
            'maritalstatus' => '',
            'user_id' => ''
        ));
        
        
        $UD = DB::table('user_details')->where('user_id', $request->user_id)->first();
        $id = $UD->id;

        $userdetails = UserDetails::find($id);
        
        $userdetails->user_id = $request->user_id;
        $userdetails->bloodG = $request->bloodG;
        $userdetails->phone = $request->tel;
        $userdetails->emergency_number = $request->emgno;
        $userdetails->gender = $request->Gender;
        $userdetails->address = $request->address;
        $userdetails->city = $request->city;
        $userdetails->nic = $request->nic;
        $userdetails->dob = $request->dob;
        $userdetails->maritalstatus = $request->maritalstatus;
        
        // dd($userdetails);
        $userdetails->save();
        return view('profile.edit')->with('userdetails', $userdetails);

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetails $userDetails)
    {
        //
    }
}
