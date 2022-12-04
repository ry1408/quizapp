@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;">Add Subject</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {!! Form::open([
                'route' => 'subject.store',
                'method' => 'POST',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]) !!}

            <div class="form-group  ">
                {{ Form::label('board', trans('Board Name')) }}
                <select name="board_id" class="form-control js board_select" id="board_id" required="required">
                    <option value="">-- Select --</option>
                    @foreach ($board_name as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group class_list"></div>

            <div class="form-group">
                {{ Form::label('name', trans('Subject Name')) }}
                {{ Form::text('subject_name', old('name'), ['class' => 'form-control']) }}
            </div>


            <div class="form-group">
                {{ Form::label('image', trans('Image')) }}
                {{ Form::file('image', old('image'), ['class' => 'form-control']) }}

            </div>


            {{ Form::submit(trans('Submit'), ['class' => 'btn btn-primary']) }}
            {!! Form::close() !!}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on("change", ".board_select", function() {
                var board_select = $(".board_select").val();
                console.log(board_select);
                //$("#loader_img").show();
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    url: "{{ route('subject.getClassList') }}",
                    data: {
                        'board_select': board_select
                    },
                    type: "POST",
                    success: function(respose) {
                        if (respose) {
                            console.log('' + respose);
                            $('.class_list').html('');

                            $('.class_list').html(respose);

                        }
                    }
                });
            });
        });
    </script>
@endsection
