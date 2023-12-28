<div name="card" class="">
    <div
        class="relative flex flex-col min-w-0 rounded break-words border-md bg-gray-100 dark:bg-gray-700 border-1 border-gray-300 dark:border-gray-200">
        <div name="card-header" class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
            {{ $header ?? null }}</div>

        <div name="card-body" class="flex-auto p-6">{{ $slot ?? null }}</div>
        <div name="card-footer" class="py-3 px-6 bg-gray-200 border-t-1 border-gray-300">{{ $footer ?? null }}</div>
    </div>
</div>
