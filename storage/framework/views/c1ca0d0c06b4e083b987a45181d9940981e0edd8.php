
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;">Add Review</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo Form::open(['route' => 'review.store', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('name', trans('Name'))); ?>

                <?php echo e(Form::text('name', old('name'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('position', trans('Position'))); ?>

                <?php echo e(Form::text('position', old('position'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('number_of_star', trans('Number of Star'))); ?>

                <?php echo e(Form::text('number_of_star', old('number_of_star'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('subject', trans('Subject'))); ?>

                <?php echo e(Form::text('subject', old('subject'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('description', trans('Description'))); ?>

                <?php echo e(Form::text('description', old('description'), ['class' => 'form-control'])); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('image', trans('Image'))); ?>

                <?php echo e(Form::file('image',['class' => 'form-control'])); ?>

            </div>
            <?php echo e(Form::submit(trans('Add Review'), ['class' => 'btn btn-primary'])); ?>

            <?php echo Form::close(); ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/reviews/create.blade.php ENDPATH**/ ?>