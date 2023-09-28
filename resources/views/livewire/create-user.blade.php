<div>
    <form wire:submit.prevent="register">
        <!-- Account Type -->
        <div class="mt-4">
            <x-input-label for="name" class="" :value="__('Register As')" />
            <x-simple-select       
                wire:model.lazy="account_type"
                name="account_type"
                id="account_type"
                :options="$account_types"
                placeholder="Register As"
                :searchable="false"                                               
                class="py-1 block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-100 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"     
            />
            <x-input-error :messages="$errors->get('account_type')" class="mt-2" />
        </div>
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full dark:bg-gray-100" type="text" name="name" wire:model.lazy="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full dark:bg-gray-100" type="email" name="email" wire:model.lazy="email" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full dark:bg-gray-100" type="text" name="phone" wire:model.lazy="phone" required autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- CPF -->
        <div class="mt-4">
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full dark:bg-gray-100" type="text" name="cpf" placeholder='000.000.000-00' wire:model.lazy="cpf" required autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full dark:bg-gray-100"
                            type="password"
                            name="password"
                            wire:model.lazy="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full dark:bg-gray-100"
                            type="password"
                            name="password_confirmation"
                            wire:model.lazy="password_confirmation"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-danger-button class="ml-4">
                {{ __('Register') }}
            </x-danger-button>
        </div> 
         
    </form>

</div>
