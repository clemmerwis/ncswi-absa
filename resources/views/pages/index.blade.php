<x-layout>
    <div class="hero pt-16 shadow-md rounded-b">
        <div class="container mx-auto xl:pl-14 px-6">
            {{-- <div class="herobox">
                <h2 class="hero-title bluegradtext font-black leading-loose text-4xl">Where do I begin?</h2>
                <p class="hero-text break-normal">Our new website makes your certification or re-certification application submission fast and easy. Please read
                    all information at each step in the process. Reading and following the instructions will ensure your application
                    is processed in a timely manner. Incomplete or incorrect applications will delay the processing of your
                    application.
                </p>    
            </div> --}}
            <div class="herotag">
                <h3 class="bluegradtext text-2xl font-family-roboto">This could be you; now and well into the 21st century.</h3>
            </div>

            <div class="flex flex-wrap mt-14 w-full lg:w-3/4">
                <x-herobutton>
                    <x-herofront icon="bx bx-data">
                        <h2 class="card-title text-xl font-bold mb-3 flex justify-center">Verification Database</h2>
                    </x-herofront>
                    <x-heroback icon="bx bx bx-data">
                        <li>Verify Certification Number</li>
                    </x-heroback>
                </x-herobutton>

                <x-herobutton>
                    <x-herofront icon="bx bx-detail">
                        <h2 class="card-title text-xl font-bold mb-3 flex justify-center">Elligibiliity Information</h2>
                    </x-herofront>
                    <x-heroback icon="bx bx-detail">
                        <li class="mb-2">Initial Exam eligibility requirements</li>
                        <li>Recertification eligibility requirements</li>
                    </x-heroback>
                </x-herobutton>

                <x-herobutton>
                    <x-herofront icon="bx bx-tachometer">
                        <h2 class="card-title text-xl font-bold mb-3 flex justify-center">Registration Applications</h2>
                    </x-herofront>
                    <x-heroback icon="bx bx-tachometer">
                        <li class="mb-2">Initial Application</li>
                        <li class="mb-2">Recertification Application</li>
                        <li>Retest Application</li>
                    </x-heroback>
                </x-herobutton>

                <x-herobutton>
                    <x-herofront icon="bx bx-check-square">
                        <h2 class="card-title text-xl font-bold text-black mb-3 flex justify-center">Forms &amp; Checklists</h2>
                    </x-herofront>
                    <x-heroback icon="bx bx-check-square">
                        <li class="mb-2">Forms</li>
                        <ul class="pl-8 list-lower-roman list-outside">
                            <li class="mb-2">Recertification</li>
                            <li class="mb-2">Manual Skills Assessment</li>
                        </ul>
                        <li class="mb-2">Required Documents Checklist</li>
                        <ul class="pl-8 list-disc list-lower-roman list-outside">
                            <li class="mb-2">Initial Exam</li>
                            <li class="mb-2">Recertification Exam</li>
                        </ul>
                        <li>Fee Schedule</li>
                    </x-heroback>
                </x-herobutton>
                
                {{-- <div class="flex flex-1 max-w-72 mb-5">
                    <div class="flex-grow h-48 bg-white p-4 py-6 shadow rounded-xl">
                        <h2 class="text-xl font-bold text-black mb-6">Verification Database</h2>
                    </div>
                </div>
                <div class="flex flex-col w-72 mb-5 h-48 bg-white px-2 py-3 shadow rounded-xl cursor-pointer">
                    <div class="flex justify-center">
                        <i class="bx bx-check-square text-4xl"></i>
                    </div>
                    <div class="pl-3">
                        <h2 class="text-xl font-bold text-black mb-3">Elligibility Information</h2>
                        <ul class="text-sm list-inside list-decimal pl-1 list-alpha">
                            <li class="mb-2">Initial Exam eligibility requirements</li>
                            <li>Recertification eligibility requirements</li>
                        </ul>
                    </div>
                </div>
                <div class="flex w-72 mb-5">
                    <div class="flex-grow h-48 bg-white p-4 py-6 shadow rounded-xl">
                        <h2 class="text-xl font-bold text-black mb-6">Verification Database</h2>
                    </div>
                </div>
                <div class="flex w-72 mb-5">
                    <div class="flex-grow h-48 bg-white p-4 py-6 shadow rounded-xl">
                        <h2 class="text-xl font-bold text-black mb-6">Verification Database</h2>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <main class="main container mx-auto pb-28 border-b pt-10 min-h-screen">
        {{-- pb-28 pt-10  --}}
        
    </main>
</x-layout>