@extends('layouts.app', ['activePage' => 'doctime', 'titlePage' => __('doctime')])

@section('content')
  <div class="content">
    <div class="container-fluid">
        <h1>Doctors</h1>
        
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">Doctors</h4>
                <p class="card-category">Specialized doctors table</p>
              </div>
              <div class="card-body">
                @if (isset($doctors))
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Add Function
                        </th>
                      </tr></thead>
                      
                      <tbody>
                          @foreach ($doctors as $doc)
                              <tr>
                              <td>
                                  {{$doc->id}}
                              </td>
                              <td>
                                  {{$doc->name}}
                              </td>
                              <td>
                                  <a href="/doctimes/{{$doc->id}}" class="btn btn-success btn-sm">View Schedules</a>
                              </td>
                              </tr>
                          @endforeach
                      </tbody>

                    </table>
                  </div>
                    
                @else
                  <p class="lead">No Found Doctors </p>    
                @endif

              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
