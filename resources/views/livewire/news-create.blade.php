<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Create News') }}
    </h3>
    <form wire:submit.prevent="createNews">
        @csrf
        <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4 ">                    
            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="create_date" :value="__('Date')" />
                <x-datepicker id="create_date" type="date" class="block mt-1 w-full" name="create_date" wire:model.lazy="create_date" required autocomplete="create_date" />
                <x-input-error :messages="$errors->get('create_date')" class="mt-2" />
            </div>                                                      
            <!-- Title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model.lazy="title" required autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <!-- Category -->
            <div class="mt-4">
                <x-input-label for="category" :value="__('Category')" />
                <x-simple-select       
                    wire:model.lazy="category"
                    name="category"
                    id="category"
                    :options="$categories"
                    value-field='id'
                    text-field='category_name'
                    placeholder="Select Category"
                    search-input-placeholder="Search Category"
                    :searchable="true"                          
                    class="py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"     
                />
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div> 
        </div>
            <!-- Content -->
            <div class="mt-4 col-span-full">
                <x-input-label for="content" :value="__('Content')" />
                <x-text-area id="content" class="block mt-1 w-full" rows="7" name="content" wire:model.lazy="content" required autocomplete="content" />
                <x-input-error :messages="$errors->get('content')" class="mt-2" />
            </div>
            <div class="mt-4 col-span-full">
                <div class="flex items-center justify-start">
                    <x-primary-button>
                        {{ __('Save') }}
                    </x-primary-button>
                </div> 
            </div>
        </div>
    </form>
</div>