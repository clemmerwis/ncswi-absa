@props([
    'py' => 'md',
    'size' => [
        'sm' => 'py-10',
        'md' => 'py-14',
        'lg' => 'py-24',
        'xl' => 'py-32',
        'none' => ''
    ]
])

<div {{ $attributes->merge(['class' => "{$size[$py]} flex flex-wrap container mx-auto"]) }}>
    {{ $slot }}
</div>