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
                        Voltar
                    </a>
                    <p><strong>Usuarios</strong>: {{ $user->name }}</p>
                    <p><strong>Email</strong>: {{ $user->email }}</p>

                    <form action="{{ url('/users/' . $user->id . '/permissions') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-4 gap-4">
                            @foreach ($permissions as $permission)
                                <div class="col">
                                    <x-input-label for="name" value="{{ $permission->name }}" />
                                    <input type="checkbox" name="permission[]" value="{{ $permission->name }}" {{ in_array($permission->id, $permissionsuser) ? 'checked' : '' }}>
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
