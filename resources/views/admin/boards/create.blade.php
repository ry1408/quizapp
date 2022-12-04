@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;">Add Board</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => 'board.store', 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
             
      
            <div class="form-group">
                {{ Form::label('name', trans('Board Name')) }}
                {{ Form::text('board_name', old('board_name'), ['class' => 'form-control','placeholder' => trans('Enter Board Name ')] )}}
                
            </div>
            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                {{ Form::file('image', old('image'), ['class' => 'form-control'] )}}
                <img src="#" id="Image" name="" />
            </div>
            
            
            {{ Form::submit(trans('Submit'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->    
  </div>
  <!-- /.card -->


@endsection

