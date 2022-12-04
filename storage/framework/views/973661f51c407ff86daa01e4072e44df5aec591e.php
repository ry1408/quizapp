
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;"></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo Form::open([
                'route' => ['chapter.update', $chapter->id],
                'method' => 'POST',
                'files' => 'true',
                'enctype' => 'multipart/form-data',
            ]); ?>



            <div class="form-group">
                <?php echo e(Form::label('subject', trans('Class'))); ?>

                <?php echo e(Form::select('subject_id', App\Model\Subject::pluck('subject_name', 'id'), old('subject_id'), ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('name', trans('Chapter Name'))); ?>

                <?php echo e(Form::text('Chapter_name', $chapter->chapter_name, ['class' => 'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('name', trans('Chapter Number'))); ?>

                <?php echo e(Form::text('Chapter_number', $chapter->chapter_number, ['class' => 'form-control'])); ?>

            </div>


            <div class="form-group">
                <?php echo e(Form::label('image', trans('image'))); ?>

                <?php echo e(Form::file('image', ['class' => 'form-control'])); ?>

                <img src="<?php echo e($chapter->image); ?>" alt="no image">
            </div>


            <?php echo e(Form::hidden('_method', 'PUT')); ?>

            <?php echo e(Form::submit(trans('Update'), ['class' => 'btn btn-primary'])); ?>

            <?php echo Form::close(); ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/chapter/edit.blade.php ENDPATH**/ ?>