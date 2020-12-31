<div class="flex flex-col w-72 mb-5 h-48 bg-white px-2 py-3 shadow rounded-xl cursor-pointer">
    <div class="flex justify-center">
        <i class="bx bx-check-square text-4xl"></i>
    </div>
    <div class="pl-3">
        <h2 class="text-xl font-bold text-black mb-3">{{ $slot }}</h2>
        <ul class="text-sm list-inside list-decimal pl-1 list-alpha">
            <li class="mb-2">Initial Exam eligibility requirements</li>
            <li>Recertification eligibility requirements</li>
        </ul>
    </div>
</div>