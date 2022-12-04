 
    <?php if(!empty($chapterList)): ?>
    <?php echo e(Form::label('class', trans('Chapter Name'))); ?>

    <select name="chapter_id" class="form-control js  " id="chapter_id" required="required">
        <option value="">-- Select  --</option>
        <?php $__currentLoopData = $chapterList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    
    <?php endif; ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/exams/get-Chapter-list.blade.php ENDPATH**/ ?>