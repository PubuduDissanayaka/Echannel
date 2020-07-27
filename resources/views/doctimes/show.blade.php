@extends('layouts.app', ['activePage' => 'showdoctime', 'titlePage' => __('showdoctime')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h4 class="card-title ">Dr. {{$doctors->name}}</h4>
                    <p class="card-category"> Schedulded Time Table</p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead class=" text-success">
                          <tr><th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Specialization
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Action
                          </th>
                        </tr></thead>

                        <tbody>
                            @foreach ($doctimes as $doctime)
                                <tr>
                                <td>
                                    {{-- {{$doctime->count()}} --}}
                                    {{$doctime->id}}
                                </td>
                                <td>
                                    {{$doctime->name}}
                                </td>
                                <td>
                                    {{$doctime->specialization}}
                                </td>
                                <td>
                                    {{$doctime->date}}
                                </td>
                                <td class="text-primary">
                                    {{$doctime->timeone}}
                                </td>
                                <td class="text-primary">
                                  <a href="#" class="btn btn-danger btn-sm"><i class="icon-remove"></i> Delete</a>
                                </td>
                                </tr>      
                            @endforeach
                        </tbody>
                      </table>
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