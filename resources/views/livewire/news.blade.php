<div class="mt-10" x-data="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>
    <div>
    <div class="max-w-7xl mx-auto bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="pb-12">
            @if($updateMode)
                @include('livewire.news-edit')
            @else
                @include('livewire.news-create')
            @endif
        </div>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('News List') }}
                </h3>  
                <div class="flex gap-3 align-item-center text-align-center justify-content-center pt-5">
                    <h6 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('search') }}
                    </h6>  
                    <x-text-input id="search" class="block mt-1" type="text" name="search" wire:model="search" />
                </div>                
                <div class="relative overflow-x-auto shadow-md mt-5">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    {{__('create_date')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('title')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('content')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('category')}}
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    {{__('save')}}
                                </th>
                                @if(auth()->user()->hasRole('Admin'))
                                    <th scope="col" class="px-6 py-3">
                                        {{__('Action')}}
                                    </th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @if(empty($allNews))
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" colspan="7" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        No Data
                                    </th>
                                </tr>            
                            @else
                                @foreach ($allNews as $item)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            {{$item['create_date']}}
                                        </td>      
                                        <td class="px-6 py-4">
                                            {{$item['title']}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item['content']}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item['category_detail']['category_name']}}
                                        </td>
                                        <td class="px-6 py-4">
                                            <x-primary-button  wire:click="editNews({{ $item['id'] }})">
                                                {{ __('Edit') }}
                                            </x-primary-button>
                                        </td>
                                        @if(auth()->user()->hasRole('Admin'))
                                            <td class="px-6 py-4">
                                                <form wire:submit.prevent="deleteNews({{ $item['id'] }})">
                                                    @csrf               
                                                    <div class="mt-4 col-span-full">
                                                        <div class="flex items-center">
                                                            <x-danger-button>
                                                                {{ __('Delete') }}
                                                            </x-danger-button>
                                                        </div> 
                                                    </div>
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