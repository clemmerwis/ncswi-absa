@extends('layouts.app')

@section('rightbar')
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
@endsection