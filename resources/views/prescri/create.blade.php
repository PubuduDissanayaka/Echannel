@extends('layouts.app', ['activePage' => 'presciadd', 'titlePage' => __('presciadd')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Add Prescription</h4>
                    <p class="card-category">add prescription for Patient</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="h6">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                        <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut alias facilis doloribus quia officiis iusto quos dolorem cumque. Porro, accusantium vel quam quaerat unde laboriosam. Molestiae doloribus perferendis temporibus laborum?</p>
                        <ul>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem, ipsum</li>
                        </ul>
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