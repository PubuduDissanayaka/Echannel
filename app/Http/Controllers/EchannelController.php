<?php

namespace App\Http\Controllers;

use App\Notifications\NotifyEchannel;
use App\Echannel;
use App\Doctime;
use Illuminate\Http\Request;
use App\Docspecs;
use App\specializations;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;


class EchannelController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $keyword = $request->get('search');
        $perPage = 10;

        // if (!empty($keyword)) {
        //     $user = User::where('name', 'LIKE', "%$keyword%")
        //         ->orWhere('email', 'LIKE', "%$keyword%")
        //         ->latest()->paginate($perPage); 
        // } else {
        //     $user = User::latest()->paginate($perPage);
        // }
        $specs = DB::table('specializations')->orderBy('specialization', 'asc')->get();

        return view('echannel.find')->with('specs', $specs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $doctimes = DB::table('doctimes')->where('id', $id)->first();

        return view('echannel.create')->with('doctimes', $doctimes);
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
            'name' => 'required',
            'email' => 'required',
            'nic' => 'required',
            'tel' => 'required',
            'city' => 'required',
            'channelid' => 'required',
        ));
        
        $echannel = DB::table('doctimes')->where('id', $request->channelid)->first();
        
        $ec = new Echannel;
        
        
        $ec->name = $request->name;
        $ec->email = $request->email;
        $ec->nic = $request->nic;
        $ec->tel = $request->tel;
        $ec->city = $request->city;
        $ec->doc_name = $echannel->name;
        $ec->doc_spec = $echannel->specialization;
        $ec->date = $echannel->date;
        $ec->time = $echannel->timeone;
        
        $ec->save();
        return redirect()->route('echannel.show',$ec->id);
        
        // dd($echannel);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Echannel  $echannel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $echannel = Echannel::find($id);
        // dd($echannel);

        return view('echannel.show')->with('echannel',$echannel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Echannel  $echannel
     * @return \Illuminate\Http\Response
     */
    public function edit(Echannel $echannel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Echannel  $echannel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Echannel $echannel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Echannel  $echannel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Echannel $echannel)
    {
        //
    }

    public function search(Request $request)
    {
        
        $perPage = 20;
        
        if (!empty($request)) {
            $doctimes = Doctime::where('specialization', 'LIKE', "%$request->spec%")
            ->orWhere('name', 'LIKE', "%$request->name%")
            ->orWhere('date', 'LIKE', "%$request->date%")
            ->latest()->paginate($perPage); 
        } else {
            echo "No Doctors";
        }
        
        // dd($doctimes);
        return view('echannel.list')->with('doctimes', $doctimes);

    }
}
