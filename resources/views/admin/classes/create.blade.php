@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;">Add Class</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => 'class.store', 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
            
        <div class="form-group">
            {{ Form::label('board', trans('Board Name')) }}
            {{ Form::select('board_id', App\Model\Board::pluck('board_name', 'id'), old('board_id','board_name'), ['class' => 'form-control'] )}}
        </div>

        <div class="form-group">
                {{ Form::label('name', trans('Class Name')) }}
                {{ Form::text('class_name', old('class_name'), ['class' => 'form-control'] )}}
        </div>
            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                {{ Form::file('image', old('image'), ['class' => 'form-control'] )}}
            </div>
            
            
            {{ Form::submit(trans('Submit'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->    
  </div>
  <!-- /.card -->


@endsection
