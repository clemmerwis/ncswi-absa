@props([
    'route' => ''
])


@php
    if ($route) {
        $classes = Request::routeIs($route) ? 'text-highlightblue' : 'hover:text-highlightblue';
    }
    else {
        $classes = 'hover:text-highlightblue';
    }
@endphp

<li class="py-4 list-none">
    <a href="{{ ($route) ? route($route) : "#"}}"
        {{ $attributes->merge(['class' => "font-semibold transition duration-300 ease-in-out " . $classes]) }}>
            {{ $slot }}
    </a>
</li>