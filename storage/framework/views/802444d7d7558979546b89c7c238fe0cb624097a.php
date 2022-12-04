
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => ['review.update', $review->id], 'method' => 'POST']); ?>

        <div class="form-group">
            <?php echo e(Form::label('name', trans('Name'))); ?>

            <?php echo e(Form::text('name',$review->name, ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('position', trans('Position'))); ?>

            <?php echo e(Form::text('position', $review->position ,['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('number_of_star', trans('Number of Star'))); ?>

            <?php echo e(Form::text('number_of_star',$review->number_of_star , ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('subject', trans('Subject'))); ?>

            <?php echo e(Form::text('subject', $review->subject , ['class' => 'form-control'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('description', trans('Description'))); ?>

            <?php echo e(Form::text('description', $review->description , ['class' => 'form-control'])); ?>

        </div>

        <div class="form-group">
            <?php echo e(Form::label('image', trans('Image'))); ?>

            <?php echo e(Form::file('image',$review->image , ['class' => 'form-control'])); ?>

        </div>
            <?php echo e(Form::hidden('_method', 'PUT')); ?>

            <?php echo e(Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/reviews/edit.blade.php ENDPATH**/ ?>