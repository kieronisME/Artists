<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('5-Star Songs') }}
        </h2>
    </x-slot>

    <div class="relative">
        <video autoplay loop muted class="fixed top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('ArtistImg/vid/lucki.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div> <!-- Dark overlay -->
    </div>

    <div class='relative py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-white">
                <h3 class="font-semibold text-lg mb-4">5 STAR SONGS</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- stores all fivestar albums in fivStar and iterates through them  -->
                    @foreach($fiveStaralbum as $album)  
                        <x-fiveStar-card
                            :title="$album->title"
                            :rating="$album->rating"
                            :releaseYear="$album->releaseYear"
                            :image="$album->image"
                            :album="$album"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





