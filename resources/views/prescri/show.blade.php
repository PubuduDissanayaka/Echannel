@extends('layouts.app', ['activePage' => 'prescishow', 'titlePage' => __('prescishow')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content">
    <div class="container-fluid">
        <div class="row">

            @if (isset($pres))
            @forelse ($pres as $p)
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Dr. {{$p->doc_name}}</h4>
                        <p class="card-category">{{date('F j, Y',strtotime($p->created_at))}} @ {{date('g:i A',strtotime($p->created_at))}}</p>
                    </div>
                    <div class="card-body">
                            <div class="h6">{!!$p->title!!}</div>
                            <div>
                                {!!$p->prescription!!}
                            </div>
                    </div>
                    </div>
                </div>
            
            @empty
                
            @endforelse
            @else
                <P class="lead">You do not have a medical history</P>
            @endif
        
            </div>
        </div>
    </div>
@endsection

@section('externaljs')
    
@endsection