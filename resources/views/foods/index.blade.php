<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('foods') }}
            </h2>
            <h2><a href="{{ route('foods.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">create</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table>
                        <thead class="text-xs text-gray-700 uppercase bg-purple-50 dark:bg-gray-700 dark:text-gray-400">
                            <th scope="col" class="px-6 py-3"> {{ __('food_name') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('primary_img') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('description') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('weight') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('price') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('offer_percentage') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('offer_name') }}</th>
                            <th scope="col" class="px-6 py-3">{{ __('offer_price') }}</th>



                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                                <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $food->food_name }}</td>
                                    <td class="px-6 py-4"><img src="{{$food->image()}}" alt=""></td>
                                    <td class="px-6 py-4">{{ $food->decription }}</td>
                                    <td class="px-6 py-4">{{ $food->weight }}</td>
                                    <td class="px-6 py-4">{{ $food->price }}</td>
                                    <td class="px-6 py-4">{{ $food->offer_percentage ?? "%.$food->offer_percentage"}}</td>
                                    <td class="px-6 py-4">{{ $food->offer->offer_name ?? '' }}</td>
                                    <td class="px-6 py-4">{{ $food->offer->offer_price ?? '' }}</td>



                                    {{-- <td class="px-6 py-4">{{ $food->primary_img }}</td> --}}

                                    {{-- <td class="px-6 py-4"><img src="{{asset($food->primary_img)}}" alt=""></td> --}}

                                    <td>
                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <a href="{{ route('foods.show', $food) }}"
                                                class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                View
                                            </a>
                                            <a href="{{ route('foods.edit', $food) }}"
                                                class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Edit
                                            </a>
                                            <form action="{{ route('foods.destroy',$food) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach ()
                            {{ $foods->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
