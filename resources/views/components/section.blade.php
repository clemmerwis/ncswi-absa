@props([
    'paddingTop' => 'py-24'
])
<section {{ $attributes->merge(['class' => "w-full"])  }}>
    <div class="container mx-auto px-6 md:px-0 pb-24 {{ $paddingTop }}">
        {{ $slot }}
    </div>
</section>