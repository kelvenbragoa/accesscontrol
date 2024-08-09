<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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
                    <a href="{{ route('users.index') }}"
                        class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        <i class="fas fa-arrow-left"></i>Voltar
                    </a>
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" value="{{ $user->name }}" type="text"
                                class="block mt-1 w-full" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="email" value="Email" />
                            <x-text-input id="email" readonly name="email" value="{{ $user->email }}"
                                type="text" class="block mt-1 w-full" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                 autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation"  autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        {{-- <div class="grid grid-cols-4 gap-4">
                            @foreach ($roles as $role)
                                <div class="col">
                                    <x-input-label for="name" value="{{ $role->name }}" />
                                    <input type="checkbox" name="role[]" value="{{ $role->name }}" {{ in_array($role->id, $rolesuser) ? 'checked' : '' }}>
                                        {{-- {{ in_array($role->id, $rolesuser) ? 'checked' : '' }}> --}}
                                    {{-- <x-text-input id="name" name="permission[]" value="{{$permission->name}}" type="checkbox" :checked="in_array($permission->id, $rolepermissions) ? 'true' : 'false'" /> 
                                </div>
                            @endforeach
                        </div> --}}

                        <div class="mt-4">
                            <x-primary-button>
                                Editar
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
