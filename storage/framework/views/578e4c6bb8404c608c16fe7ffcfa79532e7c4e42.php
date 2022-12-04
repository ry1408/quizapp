
<?php $__env->startSection('content'); ?>


  <div class="card">
    <div class="card-header">
        <h3 class="card-title" style="float:none;"><?php echo e($title); ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?php echo Form::open(['id' => 'form_data', 'url' => aurl('admin/destroy/all'), 'method' => 'POST']); ?>

        <?php echo e(Form::hidden('_method', 'DELETE')); ?>

        <?php echo $dataTable->table(['class' => 'dataTable table table-bordered table-striped dtr-inline'], true); ?>

      <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <div class="modal fade" id="deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body text-danger">
          <p class="empty_record d-none"><?php echo e(trans('admin.please_check_record_number')); ?></p>
          <p class="not_empty_record d-none"><?php echo e(trans('admin.confirm_delete_record')); ?> <span id="record_count"></span> <?php echo e(trans('admin.questionMark')); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
          <input type="submit" class="btn btn-primary btn-sm submit_delete_all" value="<?php echo e(trans('admin.okay')); ?>">
        </div>
      </div>
    </div>
  </div>

<?php $__env->startPush('js'); ?>
  <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
  <script src="/vendor/datatables/buttons.server-side.js"></script>
  <?php echo $dataTable->scripts(); ?>

  <script>delete_All();</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\quizapp\resources\views/admin/admins/index.blade.php ENDPATH**/ ?>