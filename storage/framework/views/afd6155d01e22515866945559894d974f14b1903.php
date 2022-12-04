
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;">Add Subject</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo Form::open([
                'route' => 'subject.store',
                'method' => 'POST',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]); ?>


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

            <div class="form-group">
                <?php echo e(Form::label('name', trans('Subject Name'))); ?>

                <?php echo e(Form::text('subject_name', old('name'), ['class' => 'form-control'])); ?>

            </div>


            <div class="form-group">
                <?php echo e(Form::label('image', trans('Image'))); ?>

                <?php echo e(Form::file('image', old('image'), ['class' => 'form-control'])); ?>


            </div>


            <?php echo e(Form::submit(trans('Submit'), ['class' => 'btn btn-primary'])); ?>

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
                //$("#loader_img").show();
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
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/subjects/create.blade.php ENDPATH**/ ?>