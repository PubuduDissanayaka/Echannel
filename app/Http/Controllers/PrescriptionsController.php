<?php

namespace App\Http\Controllers;

use App\Prescriptions;
use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use Illuminate\Support\Facades\DB;


class PrescriptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $user = User::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage); 
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('prescri.userlist')->with('user', $user);
    }

    public function userlist()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpres($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('prescri.create')->with('user',$user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, array(
            'userid' => 'required',
            'docname' => 'required',
            'title' => 'required',
            'message' => 'required',
        ));
        
        $pres = new Prescriptions;
        
        $pres->user_id = $request->userid;
        $pres->doc_name = $request->docname;
        $pres->title = $request->title;
        $pres->prescription = $request->message;
        
        $pres->save();
        toastr()->success('prescription has been added successfully!');

        return back();
        
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pres = DB::table('prescriptions')->where('user_id', $id)->orderBy('created_at', 'desc')->get();
        // dd($pres);
        return view('prescri.show')->with('pres',$pres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescriptions $prescriptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescriptions $prescriptions)
    {
        //
    }
}
