<x-layout>
    {{-- hero --}}
    <div class="hero pt-16 shadow-md rounded-b">
        <div class="container mx-auto xl:pl-14 px-6">
            <div class="herotag">
                <h3 class="bluegradtext text-2xl font-family-roboto">This could be you; now and well into the 21st century.</h3>
            </div>

            <div class="flex flex-wrap mt-14 w-full lg:w-3/4">
                @include('partials/flipcards')
            </div>
        </div>
    </div>

    <main class="main border-b">
        
        {{-- exam --}}
        <x-section class="bg-bluegray">
            <div class="md:w-9/12 mx-auto">
                <x-section-title subtitle="Exams" title="Take Our" bluehighlight="Practice Exams"></x-section-title>

                <div class="grid grid-cols-2 cursor-pointer">

                    <div class="grid place-items-center" data-aos="fade-right">
                        <img src="{{ asset('assets/img/freetest.png') }}" alt="image of practice exam">
                        <h4 class="text-center mt-8 text-bootgray font-family-roboto text-xl font-medium">FREE 10-Question Practice Exam</h4>
                    </div>
                
                    <div class="grid place-items-center" data-aos="fade-left">
                        <img src="{{ asset('assets/img/paidtest.png') }}" alt="image of advanced practice exam">
                        <h4 class="text-center mt-8 text-bootgray font-family-roboto text-xl font-medium">40-Question Advanced Practice Exam</h4>
                    </div>

                </div>

            </div>
        </x-section>

        {{-- store --}}
        <x-section class="bg-white">
            <div class="md:w-9/12 mx-auto">
                <x-section-title subtitle="Store" title="Purchase An ABSA" bluehighlight="Lapel Pin & Uniform Patch"></x-section-title>

                <div class="grid grid-cols-2 cursor-pointer">

                    <div class="grid place-items-center" data-aos="fade-right">
                        <img src="{{ asset('assets/img/lapel.png') }}" alt="iamge of Lapel Pin">
                        <h4 class="text-center mt-8 text-bootgray font-family-roboto text-xl font-medium">FREE 10-Question Practice Exam</h4>
                    </div>
                
                    <div class="grid place-items-center" data-aos="fade-left">
                        <img src="{{ asset('assets/img/paidtest.png') }}" alt="image of Uniform Patch">
                        <h4 class="text-center mt-8 text-bootgray font-family-roboto text-xl font-medium">40-Question Advanced Practice Exam</h4>
                    </div>

                </div>

            </div>
        </x-section>

        {{-- about surgical assisting --}}
        <x-section class="bg-bluegray">
            <div class="md:w-9/12 mx-auto text-bootgray">

                <x-section-title subtitle="About" title="What is Surgical Assisting" bluehighlight="All About?"></x-section-title>

                <div class="flex justify-center mb-12" data-aos="fade-up">
                    <img src="{{ asset('assets/img/DRWeeksOR.png') }}" alt="image of Paul Weeks, MD">
                </div>
                
                <div class="flex justify-center mx-auto" data-aos="fade-up">
                    <p style="text-indent: 4rem" class="leading-relaxed">
                        <span class="subhead-sm leading-none">S</span>urgical Assisting involves active participation of a trained individual who is capable and able to assist the surgeon in completing a surgical procedure, safely and expeditiously. A surgical assistant functions in the role of a second physician, at the operating table. Ideally this individual should be another qualified surgeon or surgical resident; however, other licensed physicians experienced in surgical assisting would be the next choice. Non-licensed physicians or non-physicians with additional formal training and national certification as a surgical assistant are also acceptable, as deemed appropriate by the primary responsible surgeon, for the type and complexity of the surgical procedure.
                    </p>
                </div>

            </div>
        </x-section>

        {{-- about absa --}}
        <x-section class="bg-bluegray" paddingTop="py-0">
            <div class="md:w-9/12 mx-auto text-bootgray">
                <x-section-title title="The ABSA" bluehighlight="- (877-617-8345)"></x-section-title>

                <img class="float-left" src="{{ asset('assets/img/absa-logo.png') }}" alt="image of ABSA" data-aos="fade-top">
                <br>
                <p style="text-indent: 2rem;" class="mb-6 font-medium leading-relaxed" data-aos="fade-up">
                    <span class="subhead-sm">T</span>he American Board of Surgical Assistants (ABSA), was founded in 1987, by Paul F. Weeks, MD, PhD as a national credentialing organization, for surgical assistants. The ABSA administers a national certification examination, for surgical assistants, covering all surgical disciplines and all areas of perioperative medicine. The examination evaluates candidate knowledge of surgical anatomy, procedures and techniques, diagnostic studies, emergency situations, OSHA regulations and general patient safety.
                </p>
                <p style="text-indent: 2rem;" class="mb-6 font-medium leading-relaxed" data-aos="fade-up">
                    <span class="subhead-sm">W</span>e acknowledge that the role and function of a surgical assistant is to assist the surgeon, in the performance of a surgical procedure. It is understood and acknowledged that certification as a surgical assistant through the ABSA (SA-C) does not allow for any independent performance of any medical or surgical procedures, within the United States of America or its territories.
                </p>
                <div class="clear-both"></div>
            </div>
            
        </x-section>

        {{-- mission --}}
        <div class="missionbg">
            <x-section>
                <div class="md:w-9/12 mx-auto text-white">

                    <x-section-title title="Our Mission" titlecolor="text-white"></x-section-title>

                    <p style="text-indent: 4rem" class="font-semibold leading-relaxed text-lg">
                        <span class="subhead leading-none">A</span>s a leading provider of surgical assistant examination and credentialing, the ABSA strives to develop and maintain quality standards for the surgical assistant, thereby promoting safety and protection of the public. These standards include furtherment of knowledge, education and ethical conduct of the surgical assistant, through the continuation of the credentialing process and the promotion of pre and post educational training. The ABSA shall not discriminate, at any time, among applicants as to age, sex, race, religion, national origin, handicap, marital or other protected status.
                    </p>

                    <hr class="my-20">
                    
                    <div class="flex flex-wrap">
                        <p class="flex justify-center text-xl font-semibold w-full">"32 Years of Excellence"</p>
                        <p class="flex justify-center mt-6 text-lg w-full">1987 to 2021</p>
                        <p class="flex justify-center mt-6 text-lg w-full">We hope you will find our web site informative and a pleasure to navigate</p>
                    </div>

                    <hr class="mt-20">
                </div>
            </x-section>
        </div>

    </main>
</x-layout>