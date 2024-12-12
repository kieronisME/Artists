
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create New Album') }}
        </h2>
    </x-slot>

    <div class="relative">
        <video autoplay loop muted class="fixed top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('ArtistImg/vid/lucki.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div> <!-- Dark overlay -->
    </div>

    <div class="  relative ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-black  bg-opacity-75  ">
                <div class="p-6 text-black">
                    <h3 class="font-semibold text-lg mb-4 text-white">Add a New Album</h3>
                    <x-album-form :action="route('Albums.store')" method="POST" /> 
               
                </div>
            </div>
        </div>
    </div>
</x-app-layout>