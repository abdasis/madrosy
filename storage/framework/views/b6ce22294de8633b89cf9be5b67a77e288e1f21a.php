<?php if($floating): ?> <div class="form-floating"> <?php endif; ?>

    <?php if(!$floating): ?>
        <?php if (isset($component)) { $__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormLabel::class, ['label' => $label] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('id') ?: $id())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b)): ?>
<?php $component = $__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b; ?>
<?php unset($__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b); ?>
<?php endif; ?>
    <?php endif; ?>

    <select
        <?php if($isWired()): ?>
            wire:model<?php echo $wireModifier(); ?>="<?php echo e($name); ?>"
        <?php endif; ?>

        name="<?php echo e($name); ?>"

        <?php if($multiple): ?>
            multiple
        <?php endif; ?>

        <?php if($placeholder): ?>
            placeholder="<?php echo e($placeholder); ?>"
        <?php endif; ?>

        <?php if($label && !$attributes->get('id')): ?>
            id="<?php echo e($id()); ?>"
        <?php endif; ?>

        <?php echo $attributes->merge(['class' => 'form-select' . ($hasError($name) ? ' is-invalid' : '')]); ?>

    >

        <?php if($placeholder): ?>
            <option value="" disabled <?php if($nothingSelected()): ?> selected="selected" <?php endif; ?>>
                <?php echo e($placeholder); ?>

            </option>
        <?php endif; ?>

        <?php $__empty_1 = true; $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <option value="<?php echo e($key); ?>" <?php if($isSelected($key)): ?> selected="selected" <?php endif; ?>>
                <?php echo e($option); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php echo $slot; ?>

        <?php endif; ?>
    </select>

    <?php if($floating): ?>
        <?php if (isset($component)) { $__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormLabel::class, ['label' => $label] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormLabel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->get('id') ?: $id())]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b)): ?>
<?php $component = $__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b; ?>
<?php unset($__componentOriginal1ae4545b1c02a29629ea1aadee55f0673d45229b); ?>
<?php endif; ?>
    <?php endif; ?>

<?php if($floating): ?> </div> <?php endif; ?>

<?php echo $help ?? null; ?>


<?php if($hasErrorAndShow($name)): ?>
    <?php if (isset($component)) { $__componentOriginalcdcbbf1f95eb56fbb71a017e50568490be43a3e2 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormErrors::class, ['name' => $name] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormErrors::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdcbbf1f95eb56fbb71a017e50568490be43a3e2)): ?>
<?php $component = $__componentOriginalcdcbbf1f95eb56fbb71a017e50568490be43a3e2; ?>
<?php unset($__componentOriginalcdcbbf1f95eb56fbb71a017e50568490be43a3e2); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /media/aziz/Data Project/GitHub/madrosy/resources/views/vendor/form-components/bootstrap-5/form-select.blade.php ENDPATH**/ ?>