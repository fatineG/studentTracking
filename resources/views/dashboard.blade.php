
<x-app-layout>
<head><link rel="stylesheet" href="{{ URL::asset('css/dashboard.css')}}"></head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <hr>
        
    <x-slot name="slot">
    <div class = "py-5 px-5"> 
   <h1>Welcome to student attendance tracking system {{Auth::user()->username}}.</h1>
   <p>Note that the add student button is just for testing. Normally when an instructor creates a qr code 
   and shares it, the students will be able to add themselves to that partricular class using the qr code. For testing sake i made a direct link 
   to the add student page where it will directly add you to a room with the number 8 after filling your info.
   </div>
    </x-slot> 
   
</x-app-layout>

