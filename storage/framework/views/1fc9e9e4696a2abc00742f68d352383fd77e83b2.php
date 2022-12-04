<?php echo Form::open(['route' => ['chapter.destroy', $id], 'method' => 'POST']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

    <?php echo e(Form::button(
        '<i class="fa fa-trash"></i>', [
            'type' => 'submit',
            'class' => 'btn btn-danger btn-sm',
            'onclick' => "if(!confirm('". trans('admin.alert_delete_msg') . "')) return false;"
        ])); ?>

<?php echo Form::close(); ?>

<?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/chapter/actions/delete.blade.php ENDPATH**/ ?>