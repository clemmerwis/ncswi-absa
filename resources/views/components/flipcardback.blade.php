<div class="flip-card-back border rounded-xl shadow-lg flex flex-wrap py-2">
    <span class="flip-icon w-full flex justify-center items-center">
        <i class="{{ $icon }} text-4xl leading-none"></i>
    </span>

    <ul class="grid items-center list-lower-alpha w-full list-outside pl-8 max-w-9/10 mx-auto text-sm">
        {{ $slot }}
    </ul>

    <div class="w-full flex-auto flex items-center justify-center">
        <a class="flip-button inline-block leading-none py-3 px-6 rounded zed-1" href="{{ route($route) }}">Read More</a>
    </div>
</div>