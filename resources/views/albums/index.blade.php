<x-app-layout>
    <!-- Ensure nav stays above background -->
    <x-slot name="header">
        <div class="relative z-50 bg-black bg-opacity-75">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('All Albums') }}
            </h2>
        </div>
    </x-slot>

    <!-- Video Background -->
    <div class="relative">
        <video autoplay loop muted class="fixed top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('ArtistImg/vid/lucki.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div> <!-- Dark overlay -->
    </div>

    <!-- Content Section -->
    <div class="relative z-20 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg bg-black bg-opacity-75">
                <div class="p-6 text-white">
                    <h3 class="font-semibold text-lg mb-4">List of Albums:</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($Album as $album)
                            <x-album-card
                                :title="$album->title"
                                :rating="$album->rating"
                                :releaseYear="$album->releaseYear"
                                :image="$album->image"
                                :album="$album"
                            />
                        @endforeach

                        @if(session('success'))
                            <x-alert-success>
                                {{ session('success') }}
                            </x-alert-success>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


