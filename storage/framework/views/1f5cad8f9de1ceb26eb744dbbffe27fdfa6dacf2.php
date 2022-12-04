
<?php if(!empty($classList)): ?>
<?php echo e(Form::label('class', trans('Class Name'))); ?>

<select name="class_id" class="form-control js  " id="class_id" required="required">
    <option value="">-- Select  --</option>
    <?php $__currentLoopData = $classList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>


<?php endif; ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/chapter/get-class-list.blade.php ENDPATH**/ ?>