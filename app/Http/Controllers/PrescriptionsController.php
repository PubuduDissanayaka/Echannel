<?php

namespace App\Http\Controllers;

use App\Prescriptions;
use Illuminate\Http\Request;
use App\User;
use App\UserDetails;


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
            $user = User::where('acc_type', '3')
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage); 
        } else {
            $user = User::where('acc_type', '3')->paginate($perPage);
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
    public function show($id)
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
