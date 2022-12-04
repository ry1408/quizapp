
    <?php if(!empty($subjectList)): ?>
    <?php echo e(Form::label('class', trans('Subject Name'))); ?>

    <select name="subject_id" class="form-control js  " id="subject_id" required="required">
        <option value="">-- Select  --</option>
        <?php $__currentLoopData = $subjectList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
    
    <?php endif; ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/chapter/get-class-Subject-list.blade.php ENDPATH**/ ?>