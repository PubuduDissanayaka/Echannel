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
                    <h4 class="card-title ">Add prescription</h4>
                    <p class="card-category">write prescription for {{$user->name}}</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'prescriptions.store', 'class'=> '']) !!}
                        <div class="form-group ">
                         <input class="form-control" id="title" name="title" placeholder="Title" type="text"/>
                        </div><br>
                        <div class="form-group ">
                         <textarea class="form-control" id="message" name="message" rows="15"></textarea>
                        </div>
                        <input type="hidden" name="userid" value="{{$user->id}}">
                        <input type="hidden" name="docname" value="{{auth()->user()->name}}">
                        <div class="form-group">
                         <div>
                          <button class="btn btn-success btn-block" name="submit" type="submit">
                           Submit
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
<script src="https://cdn.tiny.cloud/1/ck5lksam8dja2hvssb8hndfyhnd9qxvwobl1z6lxjuwyswym/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'advlist autolink lists link charmap preview',
      toolbar: "undo redo styleselect bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        lists_indent_on_tab: true,
      toolbar_mode: 'floating',
    });
</script>

@endsection