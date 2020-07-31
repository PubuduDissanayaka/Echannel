@extends('layouts.app', ['activePage' => 'echannel', 'titlePage' => __('echannel')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            @forelse ($doctimes as $dt)
                <div class="col-md-4">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Dr. {{$dt->name}}</h4>
                    </div>
                    <div class="card-body">
                        <p>
                            Specialized : {{$dt->specialization}}
                        </p>
                        <p>
                            date :  {{$dt->date}}
                        </p>
                        <p>
                            Time : {{$dt->timeone}}
                        </p>
                        <p>
                            Charge : Rs. 2000/=
                        </p>

                        <a href="/echannel/create/{{$dt->id}}" class="btn btn-block btn-sm btn-success">Make an Appoinment</a>
                    </div>
                    </div>
                </div>
                
            @empty
                
            @endforelse
        </div>
    </div>
  </div>
@endsection

@section('externaljs')
    
@endsection