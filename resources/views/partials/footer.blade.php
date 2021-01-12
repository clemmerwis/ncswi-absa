<footer class="site-footer flex flex-wrap">
    <div class="footer-top w-full">
        <div class="flex flex-wrap pt-10 pb-8 container mx-auto">
            <div class="w-3/12 footer-contact footer-links">
                <h4 class="text-xl"><span class="bluegradtext">ABSA</span> Main Office</h4>
                <p class="mb-4">
                    4951 Hidden Lakes Drive<br>
                    Harshaw, Wisconsin 54529-9583<br>
                </p>
                <h3 class="w-full mb-2 bluegradtext">Telephone (Central Time Zone)</h3>
                <p class="w-full">
                    1.877.617.8345 (8am until 4pm, Monday through Friday)
                </p>
            </div>

            <div class="w-2/12 footer-links">
                <div class="flex justify-end">
                    <div>
                        <h4 class="text-xl">Useful Links</h4>
                        <ul>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-4/12 footer-links">
                <div class="flex justify-center">
                    <div>
                        <h4 class="text-xl">Our Services</h4>
                        <ul>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li class="text-gray-500 hover:text-black mb-3"><i class="bluegradtext bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="w-3/12 footer-links">
                <h4 class="text-xl">Follow us on Facebook</h4>
                <div class="social-links mt-3">
                    <a href="#" class="facebook"><i class="fsocial-icon bx bxl-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="flex flex-wrap py-8 container mx-auto">

    </div> --}}

    <x-row class="justify-around">

        <div class="flex flex-wrap w-4/12">
            <h3 class="w-full bluegradtext text-center">Fax</h3>
            <p class="w-full text-center">
                1<span class="font-bold text-xl">.</span>303<span class="font-bold text-xl">.</span>539<span class="font-bold text-xl">.</span>9847 (24 / 7)
            </p>
        </div>

        <div class="flex flex-wrap w-4/12">
            <h3 class="w-full bluegradtext text-center">Email</h3>
            <p class="w-full text-center">
                <a class="cursor-pointer" href="mailto:office@absa.net?subject=General Information Inquiry">office@absa.net (General Information)</a>
            </p>
        </div>

    </x-row>

    @include('partials/sponsorbar')
    
    <div class="border-t-2 border-moneygreen flex flex-wrap py-10 w-full" style="background: linear-gradient(170deg, #111827, #0e3158, #0e3158, #0e3158);">
        <div class="flex justify-center container mx-auto text-white">
            <h1 class="w-full flex justify-center">American Board of Surgical Assistants &copy; 2021</h1>
        </div>
    </div>

</footer>