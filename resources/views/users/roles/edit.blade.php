<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <a href="{{ url('/users/' .$user->id ) }}"
                        class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        <i class="fas fa-arrow-left"></i>Voltar
                    </a>
                    <p><strong>Usuarios</strong>: {{ $user->name }}</p>
                    <p><strong>Email</strong>: {{ $user->email }}</p>

                    <form action="{{ url('/users/' . $user->id . '/roles') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($roles as $role)
                                <div class="col">
                                    <x-input-label for="name" value="{{ $role->name }}" />
                                    <input type="checkbox" name="role[]" value="{{ $role->name }}" {{ in_array($role->id, $rolesuser) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4">
                            <x-primary-button>
                                Salvar
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
