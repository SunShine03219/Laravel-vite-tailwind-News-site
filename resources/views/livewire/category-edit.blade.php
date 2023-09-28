<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Category Edit') }}
    </h3>
    <form wire:submit.prevent="updateCategory">
        @csrf
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4 ">     
            <!-- Category Name -->
            <div class="mt-4">
                <x-input-label for="edit_category_name" :value="__('Edit Category Name')" />
                <x-text-input id="edit_category_name" class="block mt-1 w-full" type="text" name="edit_category_name" wire:model.lazy="edit_category_name" required autocomplete="edit_category_name" />
                <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
            </div>            
            <div class="mt-4 col-span-full">
                <div class="flex items-center">
                    <x-primary-button>
                        {{ __('Save') }}
                    </x-primary-button>
                </div> 
            </div>
        </div>
    </form>
</div>