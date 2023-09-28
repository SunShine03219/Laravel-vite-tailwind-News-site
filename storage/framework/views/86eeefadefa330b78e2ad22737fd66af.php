<div>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Categories')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
        <div>
            
            <div class="py-12">                
                <?php if($updateMode): ?>
                    <?php echo $__env->make('livewire.category-edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <?php echo $__env->make('livewire.category-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
            
            <div class="pb-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        <?php echo e(__('Category List')); ?>

                    </h3>            
                    <div class="relative overflow-x-auto shadow-md mt-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <?php echo e(__('id')); ?>

                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <?php echo e(__('Category Name')); ?>

                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <?php echo e(__('Edit')); ?>

                                    </th>
                                    <?php if(auth()->user()->hasRole('Admin')): ?>
                                        <th scope="col" class="px-6 py-3">
                                            <?php echo e(__('Delete')); ?>

                                        </th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(empty($categories)): ?>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" colspan="7" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            No Data
                                        </th>
                                    </tr>            
                                <?php else: ?>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">
                                                <?php echo e($item['id']); ?>

                                            </td>
                                            <td class="px-6 py-4">
                                                <?php echo e($item['category_name']); ?>

                                            </td>
                                            <td class="px-6 py-4">
                                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['wire:click' => 'editCategory('.e($item['id']).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => 'editCategory('.e($item['id']).')']); ?>
                                                    <?php echo e(__('Edit')); ?>

                                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                            </td>
                                            <?php if(auth()->user()->hasRole('Admin')): ?>
                                                <td class="px-6 py-4">
                                                    <form wire:submit.prevent="deleteCategory(<?php echo e($item['id']); ?>)">
                                                        <?php echo csrf_field(); ?>
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.danger-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('danger-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                            <?php echo e(__('Delete')); ?>

                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                    </form>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
            
                </div>
            </div>
        </div>
</div>

<?php /**PATH C:\Users\Administrator\Downloads\230922_Laravel_category\Laravel-vite-tailwind-simple-site\resources\views/livewire/categories.blade.php ENDPATH**/ ?>