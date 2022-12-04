
<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="float:none;"><?php echo e($title); ?></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <h3><?php echo e($exam->title); ?></h3>
            <div class="questions">
                <?php if($exam->questions->isNotEmpty()): ?>
                    <div id="accordion" class="border">
                        <h5 class="p-2"><?php echo e(trans('admin.questions')); ?> : </h5>
                        <?php $__currentLoopData = $exam->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="accordion-item border mx-2 mb-2">
                                <div id="heading<?php echo e($key); ?>">
                                    <h5 class="mb-0 position-relative">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapse<?php echo e($key); ?>" aria-expanded="true"
                                                aria-controls="collapse<?php echo e($key); ?>">
                                            <?php echo e($question->title); ?>

                                        </button>
                                        <span class="question-edit-icons position-absolute" style="<?php echo e(lang() == 'en' ? 'right: 20px' : 'left: 20px'); ?>">
                                            <a href="<?php echo e(route('question.edit', $question->id)); ?>" class=""><i class="fa fa-edit fa-xs"></i></a>
                                            <?php echo Form::open(['route' => ['question.destroy', $question->id], 'method' => 'POST', 'class' => 'd-inline-block']); ?>

                                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                                <?php echo e(Form::button(
                                                    '<i class="fa fa-trash text-danger fa-xs"></i>', [
                                                        'type' => 'submit',
                                                        'class' => 'border-0 bg-white',
                                                        'onclick' => "if(!confirm('". trans('admin.alert_delete_msg') . "')) return false;"
                                                    ])); ?>

                                            <?php echo Form::close(); ?>

                                        </span>
                                    </h5>
                                </div>
                                <?php if($question->answers->isNotEmpty()): ?>
                                    <div id="collapse<?php echo e($key); ?>" class="collapse" aria-labelledby="heading<?php echo e($key); ?>"
                                         data-parent="#accordion">
                                        <ul class="list-unstyled">
                                            <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="<?php echo e(lang() == 'ar' ? 'mr-4' : 'ml-4'); ?> <?php echo e($answer->status ? 'text-success' : 'text-danger'); ?>">
                                                    <span
                                                        class=""><?php echo e(trans('admin.answer') . ' ' . ($key + 1)); ?> : </span>
                                                    <?php echo e($answer->title); ?>

                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div id="accordion" class="border p-2 text-center"><?php echo e(trans('admin.empty-questions')); ?></div>
                <?php endif; ?>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/exams/view.blade.php ENDPATH**/ ?>