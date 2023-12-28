<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="py- m-6">

            <div class="py- m-6">

                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 tracking-wider">
                                            Id</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 tracking-wider">
                                            Name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 tracking-wider">
                                            @Mail</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 tracking-wider">
                                            Active?</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 tracking-wider">
                                            Photo</th>
                                        <th scope="col" class="flex flex-row px-6 py-3 justify-end">
                                            <div class="m-2">
                                                @hasanyrole('Super-Admin|admin|writer')
                                                    <a href="#"
                                                        class="mx-1 p-2 bg-blue-400 rounded">{{-- {{ route('users.create') }} --}}
                                                        {{ __('Create') }}
                                                    </a>
                                                @endhasanyrole
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-gray-100 dark:bg-gray-700 divide-y divide-gray-200">

                                    @foreach (App\Models\User::all() as $data)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->email }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $data->is_active ? 'Si' : 'No' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if (Storage::exists($data->profile_photo_path))
                                                    <img src="{{ Storage::url($data->profile_photo_path) }}"
                                                        class="w-5">
                                                @else
                                                    <img src="{{ Storage::url('public/images/avatars/default.png') }}"
                                                        class="w-5">
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 text-right text-sm">
                                                @hasanyrole('Super-Admin|admin|editor')
                                                    <a href="#"
                                                        class="m-2 p-2 bg-green-400 rounded">{{ __('Edit') }}</a>
                                                    {{-- {{ route('users.edit', $data->id) }} --}}
                                                @endhasanyrole
                                                @hasanyrole('super-admin|admin')
                                                    <a href="#"
                                                        class="m-2 p-2 bg-red-400 rounded">{{ __('Delete') }}</a>
                                                @endhasanyrole
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!-- More items... -->
                                </tbody>
                            </table>
                            <div class="m-2 p-2">Pagination</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
