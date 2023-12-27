<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="ml-4 px-2">
            <div class="bg-gray-100 dark:bg-gray-700 overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-gray-100 dark:bg-gray-800">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
