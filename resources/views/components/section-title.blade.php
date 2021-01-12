@props([
    'subtitle' => '',
    'title' => '',
    'titlecolor' => 'text-bootgray',
    'bluehighlight' => ''
])

<div class="section-title flex flex-wrap mb-14">

    @if ($subtitle)
        <div class="text-center w-full">
            <h2>{{ $subtitle }}</h2>
        </div>
    @endif

    <h3 class="text-center w-full mt-5 {{ $titlecolor }} font-family-roboto">{{ $title }} <span class="text-highlightblue">{{ $bluehighlight ?: $bluehighlight }}</span></h3>
</div>