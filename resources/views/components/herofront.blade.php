<div class="card-front flex flex-col justify-center w-full h-full absolute">
    <div class="icon text-center">
        <i class="{{ $icon != '' ? $icon : '' }} text-4xl"></i>
    </div>
    <div class="py-4">
       {{ $slot }}
    </div>
</div>