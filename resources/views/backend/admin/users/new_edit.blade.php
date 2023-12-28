<x-app-layout>
    @php
        if ($action == 'edit') {
            $options = ['route' => ['admin.users.update', $user], 'method' => 'put'];
        } elseif ($action == 'new') {
            $options = ['route' => ['admin.users.update', $user], 'method' => 'put'];
        }
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
            <input name="name" id="name" placeholder="{{ __('Name') }}" value="{{ $user->name }}"
                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-gray-100 text-gray-800 dark:bg-gray-800 dark:text-gray-100 border border-gray-200 rounded">

            {!! Form::model($user, $options) !!}
            <div class="mt-4">
                <h1 class="text-2xl">Listado de Roles</h1>
                @foreach ($roles as $role)
                    <label class="mx-4">
                        {!! Form::checkbox('roles[]', $role->id, $checked = null, ['class' => 'mr-4']) !!}
                        {{ $role->name }}
                    </label>
                @endforeach
            </div>
            <x-slot name="footer">
                {!! Form::submit($text = 'asignar Rol', [
                    'class' =>
                        'inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-gray-100 hover:bg-blue-600',
                ]) !!}
            </x-slot>
            {!! Form::close() !!}

    </div>
    </x-tw_card>
    </div>
</x-app-layout>
