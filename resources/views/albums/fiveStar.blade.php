<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('5-Star Songs') }}
        </h2>
    </x-slot>s

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
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





