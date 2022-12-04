@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;">{{ $title }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {!! Form::open(['route' => 'exam.store', 'method' => 'POST']) !!}


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
            <div class="form-group subject_list"></div>
            <div class="form-group chapter_list"></div>

            <div class="form-group">
                {{ Form::label('title', trans('admin.exam_name')) }}
                {{ Form::text('title', old('title'), ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('totalDegree', trans('admin.column_total_degree')) }}
                {{ Form::text('totalDegree', old('totalDegree'), ['class' => 'form-control', 'placeholder' => trans('admin.placeholder_total_degree_default')]) }}
            </div>
            <div class="form-group">
                {{ Form::label('isActive', trans('admin.active')) }}
                {{ Form::select('isActive', ['1' => trans('admin.activate'), '0' => trans('admin.not-activate')], old('isActive'), ['class' => 'form-control', 'style' => 'height:calc(2.25rem + 5px);']) }}
            </div>
            {{ Form::submit(trans('admin.new_exam'), ['class' => 'btn btn-primary']) }}
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
                // $("#loader_img").show();
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
            $(document).on("change", "#class_id", function() {
                var class_id = $("#class_id").val();
                console.log(class_id);
                // $("#loader_img").show();
                $.ajax({    
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    url: "{{ route('chapter.getChapterSubjectList') }}",
                    data: {
                        'class_id': class_id
                        
                    },
                    type: "POST",
                    success: function(respose) {
                        if (respose) {
                            console.log('' +respose);
                            $('.subject_list').html('');
                            $('.subject_list').html(respose);
                        }
                    }
                });
            });
            $(document).on("change", "#subject_id", function() {
                var subject_id = $("#subject_id").val();
                console.log(subject_id);
                // $("#loader_img").show();
                $.ajax({    
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    url: "{{ route('exam.getChapterList') }}",
                    data: {
                        'subject_id': subject_id
                        
                    },
                    type: "POST",
                    success: function(respose) {
                        if (respose) {
                            console.log('' +respose);
                            $('.chapter_list').html('');
                            $('.chapter_list').html(respose);
                        }
                    }
                });
            });
        });

         
    </script>
@endsection
