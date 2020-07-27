<?php

namespace App\Http\Controllers;

use App\Prescriptions;
use Illuminate\Http\Request;

class PrescriptionsController extends Controller
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
        return view('prescri.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescriptions  $prescriptions
     * @return \Illuminate\Http\Response
     */
    public function show(Prescriptions $prescriptions)
    {
        return view('prescri.show');
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
