<?php if (! ($breadcrumbs->isEmpty())): ?>
    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0"><?php echo e(($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title'); ?></h4>

        <div class="page-title-right">
            <ol class="breadcrumb m-0">
                <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($breadcrumb->url && !$loop->last): ?>
                        <li class="breadcrumb-item"><a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a></li>
                    <?php else: ?>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($breadcrumb->title); ?></li>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>

    </div>
<?php endif; ?>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/vendor/breadcrumbs/bootstrap5.blade.php ENDPATH**/ ?>