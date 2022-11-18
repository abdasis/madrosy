<?php if($status == 'lunas'): ?>
    <div class="badge badge-outline-success">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php elseif($status == 'belum dibayar'): ?>
    <div class="badge badge-outline-warning">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php elseif($status == 'jatuh tempo'): ?>
    <div class="badge badge-outline-danger">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php elseif($status == 'sebagian'): ?>
    <div class="badge badge-outline-info">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/_partials/boolean-status.blade.php ENDPATH**/ ?>