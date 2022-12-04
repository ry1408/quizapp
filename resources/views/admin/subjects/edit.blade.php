@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => ['subject.update', $subject->id], 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']) !!}
            
        
        <div class="form-group">
            {{ Form::label('name', trans('Subject Name')) }}
            {{ Form::text('subject_name', $subject->subject_name, ['class' => 'form-control'] )}}
        </div>
        

            <div class="form-group">
                {{ Form::label('image', trans('image')) }}
                {{ Form::file('image' ,  ['class' => 'form-control'] )}}
                <img src="{{$subject->image}}" alt="no image">
            </div>
           
           
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
