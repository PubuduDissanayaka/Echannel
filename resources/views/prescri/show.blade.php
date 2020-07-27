@extends('layouts.app', ['activePage' => 'prescishow', 'titlePage' => __('prescishow')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Dr. John Doe</h4>
                    <p class="card-category">07/25/2020 @5.50 PM</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="h6">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                        <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut alias facilis doloribus quia officiis iusto quos dolorem cumque. Porro, accusantium vel quam quaerat unde laboriosam. Molestiae doloribus perferendis temporibus laborum?</p>
                        <ul>
                            <li>Lorem, ipsum dolor.</li>
                            <li>Lorem, ipsum</li>
                            <li>Lorem ipsum dolor sit.</li>
                            <li>Lorem, ipsum.</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Dr. Hello World</h4>
                    <p class="card-category">07/20/2020 @8.00 AM</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="h6">Lorem ipsum dolor sit amet consectetur adipisicing.</div>
                        <p class="p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut alias facilis doloribus quia officiis iusto quos dolorem cumque. Porro, accusantium vel quam quaerat unde laboriosam. Molestiae doloribus perferendis temporibus laborum?</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Dr. Hello Earth</h4>
                    <p class="card-category">07/16/2020 @10.00 AM</p>
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