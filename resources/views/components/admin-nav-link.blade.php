@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg bright:bg-gray-700 bright:hover:bg-gray-600 bright:focus:bg-gray-600 bright:focus:text-white bright:hover:text-white bright:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline'
            : 'block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg bright:bg-transparent bright:hover:bg-gray-600 bright:focus:bg-gray-600 bright:focus:text-white bright:hover:text-white bright:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
