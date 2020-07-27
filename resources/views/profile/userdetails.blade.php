@extends('layouts.app', ['activePage' => 'addtime', 'titlePage' => __('addtime')])

@section('externalcss')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card ">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title">{{ __('Update User Profile') }}</h4>
                      <p class="card-category">{{ __('Update your information') }}</p>
                    </div>
                    <div class="card-body ">
                        {!! Form::open(['route' => ['userdetails.update', auth()->user()->id ]]) !!}
                        {{Form::hidden('_method','PUT')}}
                            <div class="form-group ">
                                <label class="control-label " for="bloodG">
                                    Blood Group
                                </label>
                                <select class="select form-control" id="bloodG" name="bloodG" value="">
                                <option selected="selected" hidden value="{{ isset($userdetails->bloodG) ? $userdetails->bloodG : ''}}">
                                    {{$userdetails->bloodG}}
                                </option>
                                <option value="A Positive (A+)">
                                A Positive (A+)
                                </option>
                                <option value="B Negative (B-)">
                                B Negative (B-)
                                </option>
                                <option value="B Positive (B+)">
                                B Positive (B+)
                                </option>
                                <option value="AB Negative (AB-)">
                                AB Negative (AB-)
                                </option>
                                <option value="AB Positive (AB+)">
                                AB Positive (AB+)
                                </option>
                                <option value="O Negative (O-)">
                                O Negative (O-)
                                </option>
                                <option value="O Positive (O+)">
                                O Positive (O+)
                                </option>
                                </select>
                                <span class="help-block" id="hint_bloodG">
                                Enter your Blood Group
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="tel">
                                Phone Number
                                </label>
                                <input class="form-control" id="tel" name="tel" type="text" value="{{ isset($userdetails->phone) ? $userdetails->phone : ''}}"/>
                                <span class="help-block" id="hint_tel">
                                enter your phone number
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="emgno">
                                Emergency Phone Number
                                </label>
                                <input class="form-control" id="emgno" name="emgno" type="text" value="{{ isset($userdetails->emergency_number) ? $userdetails->emergency_number : ''}}"/>
                                <span class="help-block" id="hint_emgno">
                                Enter your Emergency Phone Number
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="Gender">
                                Gender
                                </label>
                                <select class="select form-control" id="Gender" name="Gender">
                                <option selected="selected" hidden value="{{ isset($userdetails->gender) ? $userdetails->gender : ''}}">
                                    {{$userdetails->gender}}
                                </option>
                                <option value="{{ isset($userdetails->gender) ? $userdetails->gender : 'Male'}}">
                                Male
                                </option>
                                <option value="{{ isset($userdetails->gender) ? $userdetails->gender : 'Female'}}">
                                Female
                                </option>
                                </select>
                                <span class="help-block" id="hint_Gender">
                                Select your Gender
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="address">
                                Address
                                </label>
                                <input class="form-control" id="address" name="address" type="text" value="{{ isset($userdetails->address) ? $userdetails->address : ''}}"/>
                                <span class="help-block" id="hint_address">
                                Enter your Address
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="city">
                                City
                                </label>
                                <input class="form-control" id="city" name="city" type="text" value="{{ isset($userdetails->city) ? $userdetails->city : ''}}"/>
                                <span class="help-block" id="hint_city">
                                Enter your City
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="nic">
                                NIC No
                                </label>
                                <input class="form-control" id="nic" name="nic" type="text" value="{{ isset($userdetails->nic) ? $userdetails->nic : ''}}"/>
                                <span class="help-block" id="hint_nic">
                                Enter your NIC No
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="dob">
                                Date Of Birth
                                </label>
                                <input class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY" type="text" value="{{ isset($userdetails->dob) ? $userdetails->dob : ''}}"/>
                                <span class="help-block" id="hint_dob">
                                Enter your DOB
                                </span>
                                </div>
                                <div class="form-group ">
                                <label class="control-label " for="maritalstatus">
                                Marital Status
                                </label>
                                <select class="select form-control" id="maritalstatus" name="maritalstatus">
                                <option selected="selected" hidden value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : ''}}">
                                    {{$userdetails->maritalstatus}}
                                </option>
                                <option value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Single'}}">
                                    Single
                                </option>
                                <option value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Married'}}">
                                Married
                                </option>
                                <option value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Unmaried'}}">
                                Unmaried
                                </option>
                                <option value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Divorced'}}">
                                Divorced
                                </option>
                                <option value="{{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Widowed'}}">
                                Widowed
                                </option>
                                </select>
                                <span class="help-block" id="hint_maritalstatus">
                                Select your Marital Status
                                </span>
                                </div>
                                <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}" required>
                                <div class="form-group">
                                <div>
                                <button class="btn btn-block btn-sm btn-success" name="submit" type="submit">
                                SAVE
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
    $('#dob').datepicker();
</script>
@endsection