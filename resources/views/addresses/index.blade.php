<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('address-index') }}
            </h2>
            <h2><a href="{{ route('addresses.create') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create
                    New Address</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead class="text-xs text-gray-700 uppercase bg-purple-50 dark:bg-gray-700 dark:text-gray-400">
                            <th scope="col" class="px-6 py-3">{{ __('latitude') }}</th>
                            <th scope="col" class="px-6 py-3"> {{ __('longitude') }}</th>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $address)
                                <tr class="bg-gray-100 border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{ $address->latitude }}</td>
                                    <td class="px-6 py-4">{{ $address->longitude }}</td>
                                    <div class="inline-flex rounded-md shadow-sm" role="group">
                                        <td> <a href="{{ route('addresses.show', $address) }}"
                                                class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-blue-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                View
                                            </a></td>
                                        <td><a href="{{ route('addresses.edit', $address) }}"
                                                class="py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                Edit
                                            </a></td>
                                            <form action="{{ route('addresses.destroy', $address) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <td><button type="submit"
                                                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                    Delete</button></td>


                                            </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach ()
                            {{ $addresses->links() }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
