@props([
    'class' => '',
    'classFix' => ' w-10 h-10 rounded text-gray-800 dark:text-gray-200',
])
<img src="{{ asset('images/Guzanet.png') }}" @class([$class, $classFix]) />
