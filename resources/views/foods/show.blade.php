<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('VIEW') }}
            </h2>
            <h2><a href="{{ route('foods.index') }}"type="button"
                    class="-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">back</a>
            </h2>
        </div>
    </x-slot>
    {{-- @dd($post) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    this is your post
                    <h2>THIS IS id</h2>: {{ $food->id }}
                    <h2>THIS IS TITLE</h2>: {{ $food->food_name }}
                    <h2>THIS IS slug</h2>: {{ $food->price }}
                    <h2>THIS IS content</h2>: {{ $food->weight }}
                    <h2>THIS IS status</h2>:{{ $food->description }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
