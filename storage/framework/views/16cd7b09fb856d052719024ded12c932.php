<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Search Fights')); ?>

        </h3>

        <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-4 ">
            <!-- Country -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'country','value' => __('Country')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'country','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Country'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2 = $component; } ?>
<?php $component = Victorybiz\SimpleSelect\SimpleSelect::resolve(['name' => 'country','id' => 'country','options' => $countries,'valueField' => 'id','textField' => 'name','placeholder' => 'Select Country','searchInputPlaceholder' => 'Search Country','searchable' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('simple-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Victorybiz\SimpleSelect\SimpleSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.lazy' => 'country','class' => 'py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2)): ?>
<?php $component = $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2; ?>
<?php unset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2); ?>
<?php endif; ?>
            </div>

            <!-- State -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'state','value' => __('State')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'state','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('State'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2 = $component; } ?>
<?php $component = Victorybiz\SimpleSelect\SimpleSelect::resolve(['name' => 'state','id' => 'state','options' => $states,'valueField' => 'id','textField' => 'name','placeholder' => 'Select State','searchInputPlaceholder' => 'Search State','searchable' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('simple-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Victorybiz\SimpleSelect\SimpleSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.lazy' => 'state','class' => 'py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2)): ?>
<?php $component = $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2; ?>
<?php unset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2); ?>
<?php endif; ?>
            </div>
            
            <!-- Division -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'division','value' => __('Division')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'division','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Division'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2 = $component; } ?>
<?php $component = Victorybiz\SimpleSelect\SimpleSelect::resolve(['name' => 'division','id' => 'division','options' => $divisions,'valueField' => 'id','textField' => 'name','placeholder' => 'Select Division','searchable' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('simple-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Victorybiz\SimpleSelect\SimpleSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.lazy' => 'division','class' => 'py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2)): ?>
<?php $component = $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2; ?>
<?php unset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2); ?>
<?php endif; ?>
            </div>
            <!-- Rounds -->
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'round','value' => __('Round')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'round','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Round'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2 = $component; } ?>
<?php $component = Victorybiz\SimpleSelect\SimpleSelect::resolve(['name' => 'round','id' => 'round','options' => $rounds,'searchable' => false,'placeholder' => 'Select Round'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('simple-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Victorybiz\SimpleSelect\SimpleSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.lazy' => 'round','class' => 'py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2)): ?>
<?php $component = $__componentOriginal123012ebcd2848d9a9bed8abfab13fd2; ?>
<?php unset($__componentOriginal123012ebcd2848d9a9bed8abfab13fd2); ?>
<?php endif; ?>
            </div>

            <div class="mt-4">
                <!-- Passport -->
                <label for="passport" class="inline-flex items-center">
                    <input id="passport" type="checkbox" 
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="passport" wire:model.lazy="passport">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"><?php echo e(__('Passport')); ?></span>
                </label>

                <!-- US Visa -->
                <label for="visa" class="ml-5 inline-flex items-center">
                    <input id="visa" type="checkbox" 
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="visa" wire:model.lazy="visa">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400"><?php echo e(__('US Visa')); ?></span>
                </label>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md mt-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <?php echo e(__('Division')); ?>

                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?php echo e(__('Country')); ?>

                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?php echo e(__('State')); ?>

                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?php echo e(__('Oponent')); ?>

                        </th>
                        <th scope="col" class="px-6 py-3">
                            <?php echo e(__('Date')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($fights)): ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" colspan="5" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                No Data
                            </th>
                        </tr>            
                    <?php else: ?>
                        <?php $__currentLoopData = $fights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                wire:click="showModal(<?php echo e($item['id']); ?>)">
                                
                                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                    <?php echo e($item['division_detail']['name']); ?>

                                </th>
                                <td class="px-6 py-4">
                                    <?php echo e($item['country_detail']['name']); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($item['state_detail']['name']); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($item['oponent']); ?>

                                </td>
                                <td class="px-6 py-4">
                                    <?php echo e($item['date']); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('modal-fight-detail')->html();
} elseif ($_instance->childHasBeenRendered('l3332264183-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3332264183-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3332264183-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3332264183-0');
} else {
    $response = \Livewire\Livewire::mount('modal-fight-detail');
    $html = $response->html();
    $_instance->logRenderedChild('l3332264183-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

</div><?php /**PATH C:\Users\Administrator\Downloads\230922_Laravel_category\Laravel-vite-tailwind-simple-site\resources\views/livewire/search-fight.blade.php ENDPATH**/ ?>