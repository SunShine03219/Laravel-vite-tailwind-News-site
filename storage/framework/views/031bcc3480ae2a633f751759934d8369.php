<div
    x-cloak
    class="relative mt-1"
    x-data="SimpleSelect({
        dataSource: <?php echo e(is_array($options) ? json_encode($options) : json_encode([])); ?>,
        <?php if($attributes->whereStartsWith('wire:model')->first()): ?>
            selected: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>,
        <?php else: ?>
            selected: '',
        <?php endif; ?>
        valueField: '<?php echo e($valueField); ?>',
        textField: '<?php echo e($textField); ?>',
        value: <?php if(is_array($value)): ?> <?php echo e(json_encode($value)); ?> <?php else: ?> '<?php echo e($value); ?>' <?php endif; ?>,
        name: '<?php echo e($name); ?>',
        id: '<?php echo e($id); ?>',
        placeholder: '<?php echo e($placeholder); ?>',
        searchInputPlaceholder: '<?php echo e($searchInputPlaceholder); ?>',
        noOptions: '<?php echo e($noOptions); ?>',
        noResult: '<?php echo e($noResult); ?>',
        multiple: <?php echo e(isset($attributes['multiple']) ? 'true' : 'false'); ?>,
        maxSelection: '<?php echo e($maxSelection); ?>',
        required: <?php echo e(isset($attributes['required']) ? 'true' : 'false'); ?>,
        disabled: <?php echo e(isset($attributes['disabled']) ? 'true' : 'false'); ?>,
        searchable: <?php echo e($searchable ? 'true' : 'false'); ?>,
        clearable: <?php echo e($clearable ? 'true' : 'false'); ?>,
        onSelect: '<?php echo e($attributes['on-select'] ?? 'select'); ?>'
    })"
    x-init="init();"
    x-on:click.outside="closeSelect()"
    x-on:keydown.escape="closeSelect()"
    :wire:key="`${id}${generateID()}`"
>
    <div
        x-ref="simpleSelectButton"
        x-on:click="toggleSelect()"
        x-on:keyup.enter="toggleSelect()"
        tabindex="0"
        x-bind:class="{
            'rounded-md': !open,
            'rounded-t-md': open,
            'bg-gray-200 cursor-default': disabled
        }"
        <?php echo e($attributes->class('block w-full border border-gray-300 rounded-md shadow-sm focus:ring-0 focus:ring-gray-400 focus:border-gray-400 sm:text-sm sm:leading-5')->only('class')); ?>

    > 
        <div x-show="!selected || selected.length === 0" class="flex flex-wrap">
            <div class="text-gray-800 rounded-sm w-full truncate px-2 py-0.5 my-0.5 flex flex-row items-center">
                <div class="w-full px-2 truncate dark:text-gray-500" x-text="placeholder">&nbsp;</div>
                <div x-show="!disabled" x-bind:class="{ 'cursor-pointer': !disabled }" class="h-6" x-on:click.prevent.stop="toggleSelect()">
                    <?php echo $__env->make('simple-select::components.caret-icons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
        <?php if(isset($attributes['multiple'])): ?>            
            <div x-show="selected && typeof selected === 'object' && selected.length > 0" class="flex flex-wrap space-x-1">
                <template x-for="(value, index) in selected" :key="index">
                    <div class="text-gray-800 dark:text-gray-400 rounded-full truncate bg-gray-300 dark:bg-gray-800 px-2 py-0.5 my-0.5 flex flex-row items-center">
                        
                        <input type="text" :name="`${name}[]`" x-model="value" style="display: none;" />
                        <div class="px-2 truncate">
                            <?php if(isset($customSelected)): ?>
                                <span x-data="{ option: getOptionFromSelectedValue(value) }">
                                    <template x-if="(typeof option === 'string' && option.length > 0) || (typeof option === 'object' && Object.keys(option).length > 0)">
                                        <span><?php echo e($customSelected); ?></span>
                                    </template>
                                </span>
                            <?php else: ?>
                                <span x-text="getTextFromSelectedValue(value)"></span>
                            <?php endif; ?>
                        </div>
                        <div
                            x-show="!disabled"
                            x-bind:class="{ 'cursor-pointer': !disabled }"
                            x-on:click.prevent.stop="deselectOption(index)"
                            x-on:keyup.enter="deselectOption(index)"
                            class="w-6"
                            tabindex="0"
                        >
                            <?php echo $__env->make('simple-select::components.deselect-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </template>
            </div>
        <?php else: ?>            
            <div x-show="selected" class="flex flex-wrap"> 
                <div class="text-gray-800 dark:text-gray-400 rounded-sm w-full truncate px-2 py-0.5 my-0.5 flex flex-row items-center">
                    
                    <input type="text" :name="name" x-model="selected" :required="required" style="display: none;" />
                    <div class="w-full px-2 truncate">
                        <?php if(isset($customSelected)): ?>                            
                            <span x-data="{ option: getOptionFromSelectedValue(selected) }">
                                <template x-if="option !== null && ((typeof option === 'string' && option.length > 0) || (typeof option === 'object' && Object.keys(option).length > 0))">
                                    <span><?php echo e($customSelected); ?></span>
                                </template>
                            </span>
                        <?php else: ?>
                            <span x-text="getTextFromSelectedValue(selected)"></span>
                        <?php endif; ?>
                    </div>    
                    <div
                        x-show="!disabled && clearable"
                        x-bind:class="{ 'cursor-pointer': !disabled }"
                        x-on:click.prevent.stop="deselectOption()"
                        x-on:keyup.enter="deselectOption()"
                        class="h-6"
                        tabindex="0"
                    >
                        <?php echo $__env->make('simple-select::components.deselect-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                  
                    </div>                  
                    <div
                        x-show="!disabled && !clearable"
                        x-bind:class="{ 'cursor-pointer': !disabled }"
                        class="h-6"
                        tabindex="0"
                    >
                        <?php echo $__env->make('simple-select::components.caret-icons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                 
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div x-ref="simpleSelectOptionsContainer" x-bind:style="open ? 'height: ' + popperHeight : ''" class="absolute z-10 w-full">
        <div x-show="open">
            <input
                type="search"
                x-show="searchable"
                x-ref="simpleSelectOptionsSearch"
                x-model="search"
                x-on:click.prevent.stop="open=true"
                :placeholder="searchInputPlaceholder"
                class="block w-full p-2 bg-gray-100 dark:bg-gray-800 border border-gray-300 dark:border-gray-700 dark:text-gray-200 shadow-md focus:border-gray-200 focus:ring-0 sm:text-sm sm:leading-5"
            />
            <ul                
                x-ref="simpleSelectOptionsList"
                class="absolute z-10 w-full py-1 overflow-auto text-base bg-white dark:bg-gray-600 shadow-lg rounded-b-md max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                tabindex="-1"
                role="listbox"
            >
                <div x-show="Object.values(options).length == 0 && search.toString().trim() == ''" x-text="noOptions" class="px-2 py-2 dark:text-gray-400"></div>
                <div x-show="Object.values(options).length == 0 && search.toString().trim() != ''" x-text="noResult" class="px-2 py-2 dark:text-gray-400"></div>
                <template x-for="(option, index) in Object.values(options)" :key="index">
                    <li               
                        :tabindex="index"             
                        class="relative py-2 pl-3 select-none pr-9 whitespace-nowrap"
                        <?php if(isset($attributes['multiple'])): ?>
                            x-bind:class="{
                                'bg-gray-300 dark:bg-gray-700 text-black dark:text-gray-400 hover:none': selected && selected.includes(getOptionValue(option, index)),
                                'text-gray-900 dark:text-gray-400 cursor-defaul hover:bg-gray-200 dark:hover:bg-gray-800 hover:cursor-pointer focus:bg-gray-200': !(selected && selected.includes(getOptionValue(option, index))),
                            }"
                        <?php else: ?>
                            x-bind:class="{
                                'bg-gray-300 dark:bg-gray-700 text-black dark:text-gray-400 hover:none': selected == getOptionValue(option, index),
                                'text-gray-900 dark:text-gray-400 cursor-defaul hover:bg-gray-200 dark:hover:bg-gray-800 hover:cursor-pointer focus:bg-gray-200': !(selected == getOptionValue(option, index)),
                            }"
                        <?php endif; ?>
                        x-on:click="selectOption(getOptionValue(option, index))"
                        x-on:keyup.enter="selectOption(getOptionValue(option, index))"
                    >
                        <?php if(isset($customOption)): ?>
                            <?php echo e($customOption); ?>

                        <?php else: ?>
                            <span x-text="getOptionText(option, index)"></span>
                        <?php endif; ?>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>

<?php echo $__env->make('simple-select::components.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Downloads\230922_Laravel_category\Laravel-vite-tailwind-simple-site\resources\views/vendor/simple-select/components/simple-select.blade.php ENDPATH**/ ?>