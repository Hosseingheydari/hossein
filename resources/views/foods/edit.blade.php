<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('foods') }}
            </h2>
            <h2><a href="{{ route('foods.index') }}"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">back</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="p-5" action="{{ route('foods.update',$food) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="grid gap-6 mb-6 lg:grid-cols-2">
                            <div>
                                <label for="food_name"
                                    class="block mb-2 text-m font-medium text-gray-900 dark:text-gray-300">Food_Name</label>
                                <input type="text" name="food_name" id="food_name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="food_name" required="">
                            </div>
                            <div>
                                <label for="primary_img"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">primary_img</label>
                                <input type="text" name="primary_img" id="primary_img"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="primary_img" required="">
                            </div>
                            <div>
                                <label for="primary_img"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">primary_img</label>
                                <input type="text" name="primary_img" id="primary_img"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="primary_img" required="">
                            </div>

                            <div>
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">description</label>
                                <input type="text" name="description" id="description"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="description" required="">
                            </div>

                            <div>
                                <label for="weight"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">weight</label>
                                <input type="text" name="weight" id="weight"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="weight" required="">
                            </div>

                            <div>
                                <label for="price"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">price</label>
                                <input type="text" name="price" id="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="price" required="">
                            </div>


                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select
                                an
                                status</label>
                            <select id="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected>published</option>
                                <option value="">draft</option>
                            </select>

                            <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I
                                agree with the <a href="#"
                                    class="text-blue-600 hover:underline dark:text-blue-500">terms and
                                    conditions</a>.</label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>


                </div>
            </div>
        </div>
</x-app-layout>
