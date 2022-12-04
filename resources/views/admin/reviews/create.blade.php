@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;">Add Review</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {!! Form::open(['route' => 'review.store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('name', trans('Name')) }}
                {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('position', trans('Position')) }}
                {{ Form::text('position', old('position'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('number_of_star', trans('Number of Star')) }}
                {{ Form::text('number_of_star', old('number_of_star'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('subject', trans('Subject')) }}
                {{ Form::text('subject', old('subject'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', trans('Description')) }}
                {{ Form::text('description', old('description'), ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                {{ Form::file('image', old('image'), ['class' => 'form-control']) }}
            </div>
            {{ Form::submit(trans('Add Review'), ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
