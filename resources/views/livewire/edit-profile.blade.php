<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">    
                <h3 class="text-xl text-gray-800 dark:text-gray-200 leading-tight mb-5">
                    {{ __('You can update profile by click `save` button after enter other value each form.') }}
                </h3>     
                <div class="flex">            
                    <div class="flex-1 ml-5">            
                        <form wire:submit.prevent="updateProfile"  class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                            <div class="grid grid-cols-4 gap-4">
                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" wire:model.lazy="name" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <!-- Email -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" wire:model.lazy="email" required autofocus autocomplete="email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <!-- Phone -->
                                <div>
                                    <x-input-label for="phone" :value="__('Phone')" />
                                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" wire:model.lazy="phone" required autofocus autocomplete="phone" />
                                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                </div>
                                <!-- CPF -->
                                <div>
                                    <x-input-label for="cpf" :value="__('CPF')" />
                                    <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" wire:model.lazy="cpf" required autofocus autocomplete="cpf" />
                                    <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
                                </div>
                            </div>            
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
