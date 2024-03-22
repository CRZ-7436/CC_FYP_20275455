@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-orange-500 focus:border-orange-600 focus:ring focus:ring-orange-500 focus:ring-opacity-50 rounded-md shadow-sm bg-white text-gray-800']) !!}>
