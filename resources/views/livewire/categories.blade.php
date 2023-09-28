<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
        <div>
            {{-- Create new Category --}}
            <div class="py-12">                
                @if($updateMode)
                    @include('livewire.category-edit')
                @else
                    @include('livewire.category-create')
                @endif
            </div>
            {{-- All Categories --}}
            <div class="pb-6">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Category List') }}
                    </h3>            
                    <div class="relative overflow-x-auto shadow-md mt-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('id')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('Category Name')}}
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        {{__('Edit')}}
                                    </th>
                                    @if(auth()->user()->hasRole('Admin'))
                                        <th scope="col" class="px-6 py-3">
                                            {{__('Delete')}}
                                        </th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @if(empty($categories))
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" colspan="7" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            No Data
                                        </th>
                                    </tr>            
                                @else
                                    @foreach ($categories as $item)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">
                                                {{$item['id']}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$item['category_name']}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <x-primary-button wire:click="editCategory({{ $item['id'] }})">
                                                    {{ __('Edit') }}
                                                </x-primary-button>
                                            </td>
                                            @if(auth()->user()->hasRole('Admin'))
                                                <td class="px-6 py-4">
                                                    <form wire:submit.prevent="deleteCategory({{ $item['id'] }})">
                                                        @csrf
                                                        <x-danger-button>
                                                            {{ __('Delete') }}
                                                        </x-danger-button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
            
                </div>
            </div>
        </div>
</div>

