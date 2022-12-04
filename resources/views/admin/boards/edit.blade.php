@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => ['board.update', $board->id], 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('name', trans('Board Name')) }}
                {{ Form::text('board_name', $board->board_name, ['class' => 'form-control'] )}}
            </div>
            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                
                {{ Form::file('image', old('image'), ['class' => 'form-control'] )}}
                <img src="{{$board->image }}" alt="no image">
            </div>
           
           
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
