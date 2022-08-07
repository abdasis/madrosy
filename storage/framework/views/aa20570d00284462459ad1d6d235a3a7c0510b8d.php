<div>
    <?php if(isset($jsPath)): ?>
        <script><?php echo file_get_contents($jsPath); ?></script>
    <?php endif; ?>
    <?php if(isset($cssPath)): ?>
        <style><?php echo file_get_contents($cssPath); ?></style>
    <?php endif; ?>

    <div
            x-data="LivewireUIModal()"
            x-init="init()"
            x-on:close.stop="setShowPropertyTo(false)"
            x-on:keydown.escape.window="closeModalOnEscape()"
            x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
            x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
            x-show="show"
            class="fixed inset-0 z-10 overflow-y-auto"
            style="display: none;"
    >
        <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-10 text-center sm:block sm:p-0">
            <div
                    x-show="show"
                    x-on:click="closeModalOnClickAway()"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 transition-all transform"
            >
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                    x-show="show && showActiveComponent"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-bind:class="modalWidth"
                    class="inline-block w-full align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:w-full"
                    id="modal-container"
            >
                <?php $__empty_1 = true; $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div x-show.immediate="activeComponent == '<?php echo e($id); ?>'" x-ref="<?php echo e($id); ?>" wire:key="<?php echo e($id); ?>">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($component['name'], $component['attributes'])->html();
} elseif ($_instance->childHasBeenRendered($id)) {
    $componentId = $_instance->getRenderedChildComponentId($id);
    $componentTag = $_instance->getRenderedChildComponentTagName($id);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($id);
} else {
    $response = \Livewire\Livewire::mount($component['name'], $component['attributes']);
    $html = $response->html();
    $_instance->logRenderedChild($id, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/vendor/wire-elements/modal/src/../resources/views/modal.blade.php ENDPATH**/ ?>