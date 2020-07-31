@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('externalcss')
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style>
  html, body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Raleway', sans-serif;
      font-weight: 100;
      height: 100vh;
      margin: 0;
  }

  .full-height {
      height: 100vh;
  }

  .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
  }

  .position-ref {
      position: relative;
  }

  .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
  }

  .content {
      text-align: center;
  }

  .title {
      font-size: 84px;
  }

  .links > a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 12px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
  }

  .m-b-md {
      margin-bottom: 30px;
  }
</style>
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="flex-center position-ref full-height">
        @if (Route::has('login'))

        @endif

        <div class="content">
            <div class="title m-b-md">
                {{-- Meet Your
                Doctor --}}
                <img src="{{ asset('material') }}/img/logo.jpg" height="350px" width="800px">
            </div>
            </div>
        </div>
    </div>
  </div>
@endsection


@section('externaljs')
    
@endsection