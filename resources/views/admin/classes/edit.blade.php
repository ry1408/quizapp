@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => ['class.update', $class->id], 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
            
        <div class="form-group">
            {{ Form::label('name', trans('Board Name')) }}
            {{ Form::text('board_name', $class->board_name, ['class' => 'form-control'] )}}
        </div>
        <div class="form-group">
                {{ Form::label('name', trans('Class Name')) }}
                {{ Form::text('class_name', $class->class_name, ['class' => 'form-control'] )}}
            </div>
            <div class="form-group">
                {{ Form::label('image', trans('image')) }}
                {{ Form::file('image' ,  ['class' => 'form-control'] )}}
                <img src="Class/images/{{ $class->image }}" width="100px">
            </div>
           
           
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
