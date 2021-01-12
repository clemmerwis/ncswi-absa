<header class="shadow relative">

    <div class="topbar">
        <div class="container mx-auto text-white flex items-center justify-between px-6 md:px-0">

            <div class="flex contact-info py-2">
                <div class="inline-flex text-sm">
                    <i class="icofont-envelope"></i> <a class="text-sm hover:underline" href="mailto:office@absa.com">contact@example.com</a>
                </div>
                <div class="inline-flex text-sm">
                    <i class="icofont-phone pl-8"></i> +1 5589 55488 55
                </div>
            </div>

            <div class="flex py-2 text-sm">
                <div class="login">
                    <a href="#">Login</a>
                </div>
            </div>

        </div>
    </div>

    <div class="logo-nav text-white border-b-2 border-secondaryorange">

        <div class="container mx-auto px-6 md:px-0">
            <div class="logo flex-col py-8">
                <div class="flex justify-center">
                    <h1 class="inline-flex"><a href="#" class="text-2xl hover:text-blue-900">American Board of Surgical Assistants</a></h1>
                </div>
                <div class="flex justify-center">
                    <p class="inline-flex transform md:translate-x-1/2 pt-3">Surgical assistants for the &nbsp;<span class="bluegradtext italic">21st century</span></p>
                </div>
            </div>

            <div class="desktop-menus hidden md:flex justify-between">
                <ul class="leftmenu-desktop flex">
                    <x-dtopleft-navitem route="home">Home</x-dtopleft-navitem>
                    <x-dtopleft-navitem class="pl-8" route="usermenu">User Menu</x-dtopleft-navitem>
                    <x-dtopleft-navitem class="pl-8" route="home">Job Board</x-dtopleft-navitem>
                    <x-dtopleft-navitem class="pl-8" route="home">Store</x-dtopleft-navitem>
                </ul>

                <div class="hidden md:flex items-center">
                    <ul class="rightmenu-desktop flex">
                        <li class="py-4 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">About</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">FAQ</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Helpful Links</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div x-data="{ isOpen: false }" class="mobile-menus flex md:hidden relative pb-2 justify-between">
                <ul class="leftmenu-mobile flex">
                    <li class="list-none">
                        <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Home</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">User Menu</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Job Board</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Store</a>
                    </li>
                </ul>
                
                <button @click="isOpen = !isOpen" type="button" class="mobile-button font-semibold hover:text-highlightblue transition duration-300 ease-in-out focus:outline-none focus:text-highlightblue" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>

                <div @click.away="isOpen = false" 
                    x-show="isOpen" 
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="translate-y-3 opacity-0 transform"
                    x-transition:enter-end="translate-y-0 opacity-100 transform"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="translate-y-0 opacity-100 transform"
                    x-transition:leave-end="translate-y-3 opacity-0 transform"
                    class="rightmenu-mobile absolute w-full bg-black mt-8 rounded-b">
                    <ul class="flex justify-end">
                        <li class="py-3 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">About</a>
                        </li>
                        <li class="py-3 pl-6 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">FAQ</a>
                        </li>
                        <li class="py-3 pl-6 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Helpful Links</a>
                        </li>
                        <li class="py-3 px-6 list-none">
                            <a class="font-semibold hover:text-highlightblue transition duration-300 ease-in-out" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>