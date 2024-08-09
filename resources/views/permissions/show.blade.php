<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                {{-- <div class="bg-green mb-4 px-5 py-4 w-full border-l-4 border-green">
                    <div class="flex justify-between">
                        <div class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="flex-none fill-current text-green-500 h-4 w-4">
                                <path
                                    d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 16.518l-4.5-4.319 1.396-1.435 3.078 2.937 6.105-6.218 1.421 1.409-7.5 7.626z"/>
                            </svg>
                            <div
                                class="flex-1 leading-tight text-sm text-green-700 font-medium">Hello</div>
                        </div>
                    </div>
                </div> --}}
                
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('permissions.index') }}"
                       class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                       <i class="fas fa-arrow-left"></i>Voltar
                    </a>
                    <p><strong>Permissao</strong>: {{$permission->name}}</p>

                    <p><strong>Niveis com a permissao</strong>: {{$roles->count()}}</p>

                    <p><strong>Usuarios com a permissao</strong>: {{$roles->count()}}</p>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
