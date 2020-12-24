<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ABSA - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="d-flex justify-content-center icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}

    <!-- Tailwind -->
    {{-- <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Alpine.js -->
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script> --}}
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
        .font-family-opensans { font-family: 'Open Sans'; }
    </style>

    <!-- Vendor CSS Files -->
    {{-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> --}}
</head>

<body class="bg-gray-300 font-family-opensans antialiased">

    <nav class="bg-white shadow mb-10">
        <div x-data="{ isOpen: false }" class="mx-auto py-3 px-6 md:px-0 md:flex md:justify-between md:items-center">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="#" class="h-8 shadow rounded-full" alt="">
                    <a href="#" class="text-gray-800 text-xl hover:text-gray-700 ml-4">American Board of Surgical Assistants</a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button" class="text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600" aria-label="toggle menu"
                        @click="isOpen = !isOpen">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Menu, if mobile set to hidden -->
            <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center mt-4 md:mt-0">
                <div class="flex flex-col md:flex-row md:ml-6">
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Home</a>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">About</a>
                    <a class="my-1 text-sm text-gray-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0" href="#">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    
</body>

</html>
