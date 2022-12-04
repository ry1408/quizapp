
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;"><?php echo e($title); ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo Form::open(['route' => 'exam.store', 'method' => 'POST']); ?>



            <div class="form-group  ">
                <?php echo e(Form::label('board', trans('Board Name'))); ?>

                <select name="board_id" class="form-control js board_select" id="board_id" required="required">
                    <option value="">-- Select --</option>
                    <?php $__currentLoopData = $board_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group class_list"></div>
            <div class="form-group subject_list"></div>
            <div class="form-group chapter_list"></div>

            <div class="form-group">
                <?php echo e(Form::label('title', trans('admin.exam_name'))); ?>

                <?php echo e(Form::text('title', old('title'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('totalDegree', trans('admin.column_total_degree'))); ?>

                <?php echo e(Form::text('totalDegree', old('totalDegree'), ['class' => 'form-control', 'placeholder' => trans('admin.placeholder_total_degree_default')])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('isActive', trans('admin.active'))); ?>

                <?php echo e(Form::select('isActive', ['1' => trans('admin.activate'), '0' => trans('admin.not-activate')], old('isActive'), ['class' => 'form-control', 'style' => 'height:calc(2.25rem + 5px);'])); ?>

            </div>
            <?php echo e(Form::submit(trans('admin.new_exam'), ['class' => 'btn btn-primary'])); ?>

            <?php echo Form::close(); ?>

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
                        "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                    },
                    url: "<?php echo e(route('subject.getClassList')); ?>",
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
                        "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                    },
                    url: "<?php echo e(route('chapter.getChapterSubjectList')); ?>",
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
                        "X-CSRF-TOKEN": "<?php echo e(csrf_token()); ?>"
                    },
                    url: "<?php echo e(route('exam.getChapterList')); ?>",
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/exams/create.blade.php ENDPATH**/ ?>