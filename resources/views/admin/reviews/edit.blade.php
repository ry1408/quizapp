@extends('admin.index')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['route' => ['review.update', $review->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('name', trans('Name')) }}
            {{ Form::text('name',$review->name, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('position', trans('Position')) }}
            {{ Form::text('position', $review->position ,['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('number_of_star', trans('Number of Star')) }}
            {{ Form::text('number_of_star',$review->number_of_star , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('subject', trans('Subject')) }}
            {{ Form::text('subject', $review->subject , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', trans('Description')) }}
            {{ Form::text('description', $review->description , ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('image', trans('Image')) }}
            {{ Form::file('image',$review->image , ['class' => 'form-control']) }}
        </div>
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )}}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


@endsection
