<x-layout>

    <x-content>
        <div class="heroholder relative w-full">
            {{-- <div class="herotext-box absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-7">
                <h2 class="hero-title mb-6">Where do I begin?</h2>
                <p class="hero-text text-sm mb-12">
                    Our new website makes your certification or re-certification application submission fast and easy. Please read
                    all information at each step in the process. Reading and following the instructions will ensure your application
                    is processed in a timely manner. Incomplete or incorrect applications will delay the processing of your
                    application.
                </p>
                <div class="flex flex-col justify-around lg:flex-row">
                    <div class="text-center mb-7">
                        <a href="#" class="hero-one btn-get-started text-xs px-5 py-2">To Recertify Click Here</a>
                        <br>
                        <small>Recertifications</small>
                    </div>
                    <div class="text-center">
                        <a href="#" class="hero-two btn-get-started text-xs px-5 py-2">Exam Eligibility Verification</a>
                        <br>
                        <small>New Applications</small>
                    </div>
                </div>
            </div> --}}
            <img style="height: auto;" src="{{ asset('assets/img/Optimized-proud.jpg') }}" class="object-cover w-full rounded-t-lg">
        </div>
        
    </x-content>

    <x-rightbar>
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
    </x-rightbar>
    
</x-layout>