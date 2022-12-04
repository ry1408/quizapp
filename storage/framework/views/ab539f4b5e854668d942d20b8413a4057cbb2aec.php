
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => ['board.update', $board->id], 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']); ?>

            <div class="form-group">
                <?php echo e(Form::label('name', trans('Board Name'))); ?>

                <?php echo e(Form::text('board_name', $board->board_name, ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('image', trans('Image'))); ?>

                
                <?php echo e(Form::file('image', old('image'), ['class' => 'form-control'] )); ?>

                <img src="<?php echo e($board->image); ?>" alt="no image">
            </div>
           
           
            <?php echo e(Form::hidden('_method', 'PUT')); ?>

            <?php echo e(Form::submit(trans('Update'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/boards/edit.blade.php ENDPATH**/ ?>