<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ABSA - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="favicon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
        .font-family-opensans { font-family: 'Open Sans'; }
    </style>
</head>

<body class="bg-white font-family-opensans antialiased overflow-x-hidden">

    <header class="shadow border-bottom mb-10 relative">
        <div class="topbar bg-gray-900">
            <div class="container mx-auto text-white flex items-center justify-between px-6 md:px-0">
                <div class="flex contact-info py-4">
                    <div class="inline-flex text-sm">
                        <i class="icofont-envelope"></i> <a class="text-sm hover:underline" href="mailto:office@absa.com">contact@example.com</a>
                    </div>
                    <div class="inline-flex text-sm">
                        <i class="icofont-phone pl-8"></i> +1 5589 55488 55
                    </div>
                </div>
                <div class="flex py-4 text-sm">
                    <div class="login border-r pr-6">
                        <a href="#">Login</a>
                    </div>
                    <div class="social-links pl-6">
                        <a href="#" class="facebook"><i class="icofont-facebook">f</i></a>
                    </div>
                </div>
            </div>
        </div>

        <div x-data="{ isOpen: false }" class="container mx-auto px-6 md:px-0">
            <div class="logo flex-col py-8">
                <div class="flex justify-center">
                    <h1 class="inline-flex"><a href="#" class="text-black text-2xl hover:text-blue-900">American Board of Surgical Assistants</a></h1>
                </div>
                <div class="flex justify-center">
                    <p class="inline-flex transform translate-x-1/2 pt-3">Surgical assistants of the 21st century</p>
                </div>
            </div>

            <div class="desktop-menus hidden md:flex justify-between">
                <ul class="leftmenu-desktop flex">
                    <li class="py-4 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Home</a>
                    </li>
                    <li class="py-4 pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">User Menu</a>
                    </li>
                    <li class="py-4 pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Job Board</a>
                    </li>
                    <li class="py-4 pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Store</a>
                    </li>
                </ul>

                <div class="hidden md:flex items-center">
                    <ul class="rightmenu-desktop flex">
                        <li class="py-4 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">About</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">FAQ</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">Helpful Links</a>
                        </li>
                        <li class="py-4 pl-8 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mobile-menus flex md:hidden relative pb-2 justify-between">
                <ul class="leftmenu-mobile flex">
                    <li class="list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Home</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">User Menu</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Job Board</a>
                    </li>
                    <li class="pl-8 list-none">
                        <a class="text-black font-medium hover:text-indigo-700" href="#">Store</a>
                    </li>
                </ul>
                
                <button type="button" class="mobile-button text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" aria-label="toggle menu" @click="isOpen = !isOpen">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>

                <div :class="isOpen ? 'show' : 'hidden'" @click.away="isOpen = false" class="rightmenu-mobile absolute top-0 left-0 w-full bg-gray-200 mt-8 rounded-b">
                    <ul class="flex justify-end">
                        <li class="py-3 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">About</a>
                        </li>
                        <li class="py-3 pl-6 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">FAQ</a>
                        </li>
                        <li class="py-3 pl-6 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">Helpful Links</a>
                        </li>
                        <li class="py-3 px-6 list-none">
                            <a class="text-black font-medium hover:text-indigo-700" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container mx-auto flex">

            <div class="leftbar w-3/12 flex flex-col">

                <h4 class="border-bottom flex w-full mb-6">User Menu</h4>
                <div>
                    <ul class="flex flex-col pl-8">
                        <li class="list-disc"><a href="#" class="text-sm">ABSA Database Verification</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Apply for ABSA Certification</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">ABSA Exam Eligibility Verification</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Apply For ABSA (SA-C) Re-Certification</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">ABSA Forms</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Recertification Information</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">History and Statistics</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Examination</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Code of Ethics</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">ACS & AMA Policies</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Examination</a></li>
                        <li class="list-disc"><a href="#" class="text-sm">Examination</a></li>
                    </ul>
                </div>

            </div>


            <div class="content w-7/12 flex justify-center">
                slider<br>
                Rest of Home Page
            </div>


            <div class="rightbar w-2/12 flex flex-col">

                <div class="location p-6 rounded-lg bg-gray-800">
                    <div class="text-white text-xs xl:text-sm">
                        <h4 class="mb-4"><span class="border-bottom border-white mb-8">Location</span></h4>
                        <address>6105 S Main St, Suite 200 Aurora, CO 80016</address>
                    </div>
                </div>

                <div class="mt-6 p-6 rounded-lg bg-gray-700">
                    <div class="text-white text-xs xl:text-sm">
                        <h4 class="mb-4"><span class="border-bottom border-white">School Hours</span></h4>
                        <p>Monday-thursday:<br> 8:00am - 4:00pm MST</p>
                        <p>Fridays:<br> 8:00am - 2:00pm MST</p>
                    </div>
                </div>

                <div class="mt-6 p-6 rounded-lg bg-red-900">
                    <div class="text-white text-xs xl:text-sm">
                        <h4 class="mb-4"><span class="border-bottom border-white">Contact</span></h4>
                        <p>+1 5589 55488 55</p>
                        <p>contact@example.com</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    
</body>

</html>
