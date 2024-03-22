@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-orange-600 dark:text-orange-400']) }}>
        {{ $status }}
    </div>
@endif
