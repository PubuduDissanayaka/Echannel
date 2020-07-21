@extends('layouts.app', ['activePage' => 'addtime', 'titlePage' => __('addtime')])

@section('externalcss')
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
        body{
            background: rgb(255, 255, 255);
        }

        .doctimesform{
            color: black;
            text-decoration-color: black;
            background-color: aliceblue;
        }
        .custom-select{
            background-color: aliceblue;
        }
    </style>
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        {!! Form::open(['route' => 'doctimes.store', 'files'=> true, 'class'=> 'doctimesform']) !!}
        <br>
        <div class="form-group row">
            <label for="dname" class="col-4 col-form-label">Doctor Name</label> 
            <div class="col-8">
              <select id="dname" name="dname" class="custom-select" aria-describedby="dnameHelpBlock" required="required">
                  @foreach ($doctors as $doc)
                      <option value="{{$doc->name}}">{{$doc->name}}</option>
                  @endforeach
              </select> 
              <span id="dnameHelpBlock" class="form-text text-muted">Select Doctor Name</span>
            </div>
        </div>


        <div class="form-group row">
          <label for="spec" class="col-4 col-form-label">Specification</label> 
          <div class="col-8">
            <select id="spec" name="spec" class="custom-select" aria-describedby="specHelpBlock" required="required">
                @foreach ($specs as $spec)
                    <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                @endforeach
            </select> 
            <span id="specHelpBlock" class="form-text text-muted">Select Doctor Specification</span>
          </div>
        </div> 

        <div class="form-group row">
            <label for="date" class="col-4 col-form-label">Date</label> 
            <div class="col-8">
                <input id="datepicker" name="date" width="276" aria-describedby="dateHelpBlock" required="required"/>
                <span id="dateHelpBlock" class="form-text text-muted">enter date</span>
            </div>
        </div>

        <div class="form-group row">
            <label for="timeone" class="col-4 col-form-label">Time Slot</label> 
            <div class="col-8">
                <input id="timepickerone" name="timeone" width="276" aria-describedby="timeoneHelpBlock" required="required"/>
                <span id="timeoneHelpBlock" class="form-text text-muted">Enter Time Slot</span>
            </div>
        </div>

        <div class="form-group row">
          <div class="offset-4 col-8">
            <button type="submit" class="btn btn-info btn-sm">Save</button>
          </div>
        </div>
    {!! Form::close() !!}
    </div>
  </div>
@endsection


@section('externaljs')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $('#datepicker').datepicker();
    </script>

    <script>
        var timepickerone = $('#timepickerone').timepicker({
            format: 'hh.MM TT'
        });
    </script>
    
@endsection