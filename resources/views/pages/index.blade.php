<x-layout>
    <div class="hero pt-16 shadow-md rounded-b">
        <div class="container mx-auto xl:pl-14 px-6">
            <div class="herotag">
                <h3 class="bluegradtext text-2xl font-family-roboto">This could be you; now and well into the 21st century.</h3>
            </div>

            <div class="flex flex-wrap mt-14 w-full lg:w-3/4">
                <x-flipcard>
                    <x-flipcardfront icon="bx bx-data" title="Verification Database"/>
                    <x-flipcardback icon="bx bx-data" route="usermenu">
                        <li>Verify Certification Number</li>
                    </x-flipcardback>
                </x-flipcard>

                <x-flipcard>
                    <x-flipcardfront icon="bx bx-detail" title="Elligibiliity Information"/>
                    <x-flipcardback icon="bx bx-detail" route="usermenu">
                        <li class="mb-2">Initial Exam eligibility requirements</li>
                        <li>Recertification eligibility requirements</li>
                    </x-flipcardback>
                </x-flipcard>

                <x-flipcard>
                    <x-flipcardfront icon="bx bx-tachometer" title="Registration Applications"/>
                    <x-flipcardback icon="bx bx-tachometer" route="usermenu">
                        <li class="mb-2">Initial Application</li>
                        <li class="mb-2">Recertification Application</li>
                        <li>Retest Application</li>
                    </x-flipcardback>
                </x-flipcard>
                
                <x-flipcard>
                    <x-flipcardfront icon="bx bx-check-square" title="Forms & Checklists"/>
                    <x-flipcardback icon="bx bx-check-square" route="usermenu">
                        <li class="mb-2">Forms</li>
                        <ul class="pl-8 list-lower-roman list-outside text-sm">
                            <li class="mb-2">Recertification</li>
                            <li class="mb-2">Manual Skills Assessment</li>
                        </ul>
                        <li class="mb-2">Required Documents Checklist</li>
                        <ul class="pl-8 list-disc list-lower-roman list-outside text-sm">
                            <li class="mb-2">Initial Exam</li>
                            <li class="mb-2">Recertification Exam</li>
                        </ul>
                        <li>Fee Schedule</li>
                    </x-flipcardback>
                </x-flipcard>
            </div>
        </div>
    </div>
    <main class="main container mx-auto pb-28 border-b">
        Test
    </main>
</x-layout>