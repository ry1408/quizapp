@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;">{{ $title }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => 'banner.store', 'mathod' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('name', trans('admin.banner_name')) }}
                {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => trans('admin.banner_name')] )}}
            </div>
            <div class="form-group">
                {{ Form::label('', trans('banner.image')) }}
                {{ Form::email('banner_image', old('banner_image'), ['class' => 'form-control'] )}}
            </div>
           
            {{ Form::submit(trans('admin.new_admin'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection