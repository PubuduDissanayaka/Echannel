@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-7">
            <div class="card ">
               <div class="card-header card-header-primary">
                  <h4 class="card-title">{{ __('User Profile') }}</h4>
                  <p class="card-category">{{ __('User information') }}</p>
               </div>
               <div class="card-body ">
                  <div class="row">
                     {{-- {{ isset($userdetails->maritalstatus) ? $userdetails->maritalstatus : 'Married'}} --}}
                     @if (isset($userdetails))
                     <a href="/userdetails/{{auth()->user()->id}}/edit" class="btn btn-info btn-sm">Change Details</a>
                     <div class="row">
                     </div>
                     @else
                     <a href="/userdetails/create" class="btn btn-success btn-sm">Add Details</a>
                     @endif
                  </div>
                  <div class="col-md-12">
                     @if (isset($userdetails))
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ auth()->user()->name }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ auth()->user()->email }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Blood Group') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->bloodG }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Phone Number') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->phone }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Emergency Contact') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->emergency_number }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Gender') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->gender }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Address') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->address }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('City') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->city }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('NIC') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->nic }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Date of Birth') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->dob }}</label>
                        </div>
                     </div>
                     <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Marital Status') }}</label>
                        <div class="col-sm-9">
                           <label class="col-sm col-form-label">{{ $userdetails->maritalstatus }}</label>
                        </div>
                     </div>
                     @else
                     @endif
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-5">
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                     @csrf
                     @method('put')
                     <div class="card ">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                           <p class="card-category">{{ __('User information') }}</p>
                        </div>
                        <div class="card-body ">
                           @if (session('status'))
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                 </div>
                              </div>
                           </div>
                           @endif
                           <div class="row">
                              <label class="col-sm-4 col-form-label">{{ __('Name') }}</label>
                              <div class="col-sm-8">
                                 <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                                    @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <label class="col-sm-4 col-form-label">{{ __('Email') }}</label>
                              <div class="col-sm-8">
                                 <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                                    @if ($errors->has('email'))
                                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                           <button type="submit" class="btn btn-primary btn-sm">{{ __('Save') }}</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                     @csrf
                     @method('put')
                     <div class="card ">
                        <div class="card-header card-header-primary">
                           <h4 class="card-title">{{ __('Change password') }}</h4>
                           <p class="card-category">{{ __('Password') }}</p>
                        </div>
                        <div class="card-body ">
                           @if (session('status_password'))
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status_password') }}</span>
                                 </div>
                              </div>
                           </div>
                           @endif
                           <div class="row">
                              <label class="col-sm-4 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                              <div class="col-sm-8">
                                 <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                                    @if ($errors->has('old_password'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <label class="col-sm-4 col-form-label" for="input-password">{{ __('New Password') }}</label>
                              <div class="col-sm-8">
                                 <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                                    @if ($errors->has('password'))
                                    <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <label class="col-sm-4 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                              <div class="col-sm-8">
                                 <div class="form-group">
                                    <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                           <button type="submit" class="btn btn-primary btn-sm">{{ __('Change password') }}</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection