
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"><?php echo e($title); ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => 'question.store', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('exam', trans('admin.exam'))); ?>

                <?php echo e(Form::select('examId', App\Model\Exam::pluck('title', 'id'), old('examId'), ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('title', trans('admin.question'))); ?>

                <?php echo e(Form::text('title', old('title'), ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('order', trans('admin.order'))); ?>

                <?php echo e(Form::number('order', old('order'), ['class' => 'form-control', 'min' => 0] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('degree', trans('admin.degree'))); ?>

                <?php echo e(Form::number('degree', old('degree'), ['class' => 'form-control', 'min' => 0] )); ?>

            </div>

            <?php echo e(Form::submit(trans('admin.new_question'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/questions/create.blade.php ENDPATH**/ ?>