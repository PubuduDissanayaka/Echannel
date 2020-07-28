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
                    <form method="post">
                        <div class="form-group ">
                         <div class="input-group">
                          <input class="form-control " id="search" name="search" placeholder="search patient" value="{{ request('search') }}" type="text"/>
                         </div>
                        </div>
                        <div class="form-group">
                         <div>
                          <button class="btn btn-warning btn-sm btn-block" name="submit" type="submit">
                           Submit
                          </button>
                         </div>
                        </div>
                    </form>
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
                                      {{$u->user->name}}
                                    </td>
                                    <td>
                                        {{$u->nic}}
                                    </td>
                                    <td>
                                        {{$u->user->email}}
                                    </td>
                                    <td>
                                        <a href="/prescriptions/create" class="btn btn-success btn-sm">Add Prescription</a>
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
                        <div class="col-md-4 offset-4 d-block">
                            <div class="pagination-wrapper d-block"> {!! $user->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
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