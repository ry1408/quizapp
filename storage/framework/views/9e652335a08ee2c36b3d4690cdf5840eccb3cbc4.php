
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
    <h3 class="card-title" style="float:none;"><?php echo e($title); ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['route' => 'answer.store', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo e(Form::label('exam', trans('admin.exam'))); ?>

                <?php echo e(Form::select('examId', App\Model\Exam::pluck('title', 'id'), old('examId'), ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('question', trans('admin.question'))); ?>

                <?php echo e(Form::select('questionId', App\Model\Question::pluck('title', 'id'), old('questionId'), ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('title', trans('admin.answer'))); ?>

                <?php echo e(Form::text('title', old('title'), ['class' => 'form-control'] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('order', trans('admin.order'))); ?>

                <?php echo e(Form::number('order', old('order'), ['class' => 'form-control', 'min' => 0] )); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('status', trans('admin.answer_status'))); ?>

                <?php echo e(Form::select('status', ['0' => trans('admin.not-correct'), '1' => trans('admin.correct')], old('status'), ['class' => 'form-control', 'style' => 'height:calc(2.25rem + 5px);'] )); ?>

            </div>

            <?php echo e(Form::submit(trans('admin.new_answer'), ['class' => 'btn btn-primary'] )); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/answers/create.blade.php ENDPATH**/ ?>