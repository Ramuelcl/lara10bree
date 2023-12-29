<x-app-layout>
    @php
        if ($action == 'edit') {
            $options = ['route' => ['admin.users.update', $user], 'method' => 'PUT'];
        } elseif ($action == 'new') {
            $options = ['route' => ['admin.users.store'], 'method' => 'GET'];
        }
        // dd(['action' => $action, 'options' => $options]);
    @endphp
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($action == 'edit' ? 'Edit User' : 'New User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <x-tw_card>
            <x-slot name="header">
                <p class="font-medium my-2">{{ $user->name }}</p>
            </x-slot>
            <form action="{{ $action == 'edit' ? route('admin.users.update', $user->id) : route('admin.users.store') }}"
                method="POST">
                @csrf
                @method('PUT')
                <input name="name" id="name" placeholder="{{ __('Name') }}" value="{{ $user->name }}"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-100 border border-gray-200 rounded">
                <input name="email" type="mail" placeholder="{{ __('eMail') }}"
                    value="{{ $user->email }}"class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-100 border border-gray-200 rounded">

                <x-tw_checkbox name="is_active" label="{{ __('is Active ?') }}" value="{{ $user->is_active }}" />

                <div class="mt-4">
                    <h1 class="text-2xl">Listado de Roles</h1>
                    @foreach ($roles as $role)
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                {{ old('roles', 0) == $role->id ? 'checked' : '' }}>
                            {{ $role->name }}
                        </label>
                    @endforeach

                </div>

                <button type="submit"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-gray-100 hover:bg-blue-300">Asignar
                    Rol
                </button>

            </form>
        </x-tw_card>
    </div>
</x-app-layout>
