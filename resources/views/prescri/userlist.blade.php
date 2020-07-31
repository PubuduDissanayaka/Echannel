@extends('layouts.app', ['activePage' => 'presciusers', 'titlePage' => __('presciusers')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Search Patient</h4>
                    <p class="card-category">Search for Patient</p>
                </div>
                <div class="card-body">
                    <form method="GET" action="{{ url('/prescriptions') }}" accept-charset="UTF-8" role="search">
                        <input type="text" class="form-control" name="search" placeholder="Search User ..." value="{{ request('search') }}">
                        <button class="btn btn-warning btn-sm btn-block" type="submit">Search</button>
                    </form>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead class=" text-primary">
                            <tr><th>
                              name
                            </th>
                            <th>
                              NIC
                            </th>
                            <th>
                                E-Mail
                            </th>
                            <th>
                              Add Function
                            </th>
                          </tr>
                        </thead>
                          
                          <tbody>
                            @forelse ($user as $u)
                                  
                              <tr>
                                  <td>
                                      {{$u->name}}
                                    </td>
                                    <td>
                                        @if (isset($u->details->nic))
                                            {{$u->details->nic}}
                                        @else
                                            ----
                                        @endif
                                    </td>
                                    <td>
                                        {{$u->email}}
                                    </td>
                                    <td>
                                        <a href="/prescriptions/create/{{$u->id}}" class="btn btn-success btn-sm">Add Prescription</a>
                                    </td>
                                </tr>
                            
                                @empty
                                    <tr>
                                        <td>
                                            <p class="lead"> No Users Available Here</p>
                                        </td>
                                    </tr>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
                    <div class="row">
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('externaljs')
    
@endsection