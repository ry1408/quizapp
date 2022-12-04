@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => ['banner.update', $banner->id], 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                {{ Form::label('name', trans('Name')) }}
                {{ Form::text('name', $banner->name, ['class' => 'form-control'] )}}
            </div>
            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                
                {{ Form::file('banner_image', old('image'), ['class' => 'form-control'] )}}
                <img src="Banner/images/{{$banner->banner_image }}" width="50" class="img-thumbnail rounded-circle">
            </div>
           
           
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
