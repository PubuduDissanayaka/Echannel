<?php

namespace App\Http\Controllers;

use App\Doctime;
use App\User;
use App\Docspecs;
use App\specializations;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = DB::table('users')->where('acc_type', '2')->get();
        // $doctors = DB::table('docspecs')->get();


        // dd($doctors);
        return view('doctimes.index')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specs = DB::table('specializations')->get();
        $doctors = DB::table('users')->where('acc_type', '2')->get();

        // dd($specs);
        return view('doctimes.create')->with('specs', $specs)->with('doctors',$doctors);
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
            'dname' => 'required',
            'spec' => 'required',
            'date' => 'required',
            'timeone' => 'required',
        ));
        
        $dt = new Doctime;
        
        $dt->name = $request->dname;
        $dt->specialization = $request->spec;
        $dt->date = $request->date;
        $dt->timeone = $request->timeone;
        
        $dt->save();
        
        // redirect
        // toastr()->success('Doctor schedule Created successfully!');
        return redirect()->route('doctimes.index');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctime  $doctime
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctors = DB::table('users')->where('id', $id)->first();
        $doctimes = DB::table('doctimes')->where('name', $doctors->name)->orderBy('id', 'asc')->get();
        // dd($doctimes);
        return view('doctimes.show')->with('doctors', $doctors)->with('doctimes', $doctimes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctime  $doctime
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctime $doctime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctime  $doctime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctime $doctime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctime  $doctime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctime $doctime)
    {
        //
    }
}
