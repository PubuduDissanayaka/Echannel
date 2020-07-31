@extends('layouts.app', ['activePage' => 'addtime', 'titlePage' => __('addtime')])

@section('externalcss')
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title ">Dr. {{$doctimes->name}}</h4>
                      <p class="card-category">{{$doctimes->specialization}}</p>
                      <p>Date : {{$doctimes->date}} Time : @ {{$doctimes->timeone}}</p>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'echannel.store', 'class'=> '']) !!}
                            <div class="form-group ">
                               <label class="control-label requiredField" for="name">
                               Name
                               <span class="asteriskField">
                               *
                               </span>
                               </label>
                               <input class="form-control" id="name" name="name" placeholder="Name" type="text"/>
                            </div>
                            <div class="form-group ">
                               <label class="control-label " for="email">
                               Email
                               </label>
                               <input class="form-control" id="email" name="email" placeholder="Email" type="text"/>
                            </div>
                            <div class="form-group ">
                               <label class="control-label " for="nic">
                               NATIONAL ID NO
                               </label>
                               <input class="form-control" id="nic" name="nic" placeholder="National ID no " type="text"/>
                            </div>
                            <div class="form-group ">
                               <label class="control-label requiredField" for="tel">
                               TELEPHONE
                               <span class="asteriskField">
                               *
                               </span>
                               </label>
                               <input class="form-control" id="tel" name="tel" placeholder="Telephone" type="text"/>
                            </div>
                            <div class="form-group ">
                               <label class="control-label " for="city">
                               Living City
                               </label>
                               <input class="form-control" id="city" name="city" placeholder="Living City" type="text"/>
                            </div>
                            <input type="hidden" name="channelid" value="{{$doctimes->id}}">
                            <div class="form-group">
                               <div>
                                  <button class="btn btn-primary btn-sm btn-block" name="submit" type="submit">
                                  Submit
                                  </button>
                               </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                  </div>
            </div>
        </div>


        
    </div>
  </div>
@endsection

@section('externaljs')
    
@endsection