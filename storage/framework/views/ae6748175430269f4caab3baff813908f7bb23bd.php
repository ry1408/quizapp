
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;">Add Class</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => 'class.store', 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']); ?>

            
        <div class="form-group">
            <?php echo e(Form::label('board', trans('Board Name'))); ?>

            <?php echo e(Form::select('board_id', App\Model\Board::pluck('board_name', 'id'), old('board_id','board_name'), ['class' => 'form-control'] )); ?>

        </div>

        <div class="form-group">
                <?php echo e(Form::label('name', trans('Class Name'))); ?>

                <?php echo e(Form::text('class_name', old('class_name'), ['class' => 'form-control'] )); ?>

        </div>
            <div class="form-group">
                <?php echo e(Form::label('image', trans('Image'))); ?>

                <?php echo e(Form::file('image', old('image'), ['class' => 'form-control'] )); ?>

            </div>
            
            
            <?php echo e(Form::submit(trans('Submit'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->    
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/classes/create.blade.php ENDPATH**/ ?>