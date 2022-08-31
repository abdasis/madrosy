<?php if($status == 'lunas'): ?>
    <div class="badge badge-success">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php elseif($status == 'belum dibayar'): ?>
    <div class="badge badge-outline-warning">
        <?php echo e(Str::title($status)); ?>

    </div>

<?php elseif($status == 'jatuh tempo'): ?>
    <div class="badge badge-danger">
        <?php echo e(Str::title($status)); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/_partials/boolean-status.blade.php ENDPATH**/ ?>