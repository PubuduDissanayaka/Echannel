@extends('layouts.app', ['activePage' => 'echannel', 'titlePage' => __('echannel')])

@section('externalcss')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Echannel</h4>
                    <p class="card-category">Search for doctors</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/echannel/search') }}" accept-charset="UTF-8">
                        @csrf
                        <input type="text" class="form-control" name="search" placeholder="Doctor Name...">
                            <br>
                            <div class="row">
                            <div class="col-md-6">
                                <select id="spec" name="spec" class="custom-select" aria-describedby="specHelpBlock" required="required">
                                    @foreach ($specs as $spec)
                                        <option value="{{$spec->specialization}}">{{$spec->specialization}}</option>
                                    @endforeach
                                </select> 
                                <span id="specHelpBlock" class="form-text text-muted">Select Doctor Specification</span>
                            </div>
                            
                            <div class="col-md-6">
                                    <input id="datepicker" name="date" aria-describedby="dateHelpBlock" placeholder="MM/DD/YYYY" required="required"/>
                                    <span id="dateHelpBlock" class="form-text text-muted">Select date</span>
                            </div>
                        </div>
                        <button class="btn btn-warning btn-sm btn-block" type="submit">Search</button>
                    </form>
                    <br>
                </div>
                </div>
            </div>
        </div>
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
@endsection