
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;">Add Banner</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => 'banner.store', 'method' => 'POST','files' => 'true','enctype'=>'multipart/form-data']); ?>

             
      
            <div class="form-group">
                <?php echo e(Form::label('name', trans('Name'))); ?>

                <?php echo e(Form::text('name', old('board_name'), ['class' => 'form-control','placeholder' => trans('Enter Board Name ')] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('image', trans('Image'))); ?>

                <?php echo e(Form::file('banner_image', old('image'), ['class' => 'form-control'] )); ?>

               
            </div>
            
            
            <?php echo e(Form::submit(trans('Submit'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->    
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/banners/create.blade.php ENDPATH**/ ?>