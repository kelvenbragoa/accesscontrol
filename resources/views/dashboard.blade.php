<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container grid">

                        <div class="col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Usuarios</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">0</p>
                            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                                See our guideline
                            </a>
                        </div>
                        <div class="col p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Usuarios</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">0</p>
                            <a href="#" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                                See our guideline
                            </a>
                        </div>
                        



                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
