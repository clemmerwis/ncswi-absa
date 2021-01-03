<div class="card-back flex flex-col justify-center w-full h-full absolute">
    <div class="icon text-center">
        <i class="{{ $icon != '' ? $icon : '' }} text-4xl"></i>
    </div>
    <ul class="text-sm py-3 max-w-9/10 mx-auto list-lower-alpha list-inside">
        {{ $slot }}
    </ul>
</div>