@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {!! Form::open([
                'route' => ['chapter.update', $chapter->id],
                'method' => 'POST',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]) !!}


            <div class="form-group">
                {{ Form::label('subject', trans('Class')) }}
                {{ Form::select('subject_id', App\Model\Subject::pluck('subject_name', 'id'), old('subject_id'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('name', trans('Chapter Name')) }}
                {{ Form::text('Chapter_name', $chapter->chapter_name, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('name', trans('Chapter Number')) }}
                {{ Form::text('Chapter_number', $chapter->chapter_number, ['class' => 'form-control']) }}
            </div>


            <div class="form-group">
                {{ Form::label('image', trans('image')) }}
                {{ Form::file('image', ['class' => 'form-control']) }}
                <img src="{{ $chapter->image }}" alt="no image">
            </div>


            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit(trans('Update'), ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
