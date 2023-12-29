@props(['name' => null, 'label' => '', 'class' => ''])
{{-- resources\views\components\tw_label.blade.php --}}

@if (!$name)
    <div class="text-red-500">El nombre es nulo para el tw_label.</div>
@else
    <div @class(['mb-4', $class])>
        <label for="{{ $name }}" class="text-slate-400 font-semibold">{{ __($label ?? '') }}</label>
    </div>
@endif
