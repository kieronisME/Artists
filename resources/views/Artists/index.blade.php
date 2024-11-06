<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Artists')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">List of Artists:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($Artist as $artist)  <!-- Artists -->
                        
                            <x-artist-card
                                :title="$artist->title"
                                :rating="$artist->rating"
                                :releaseYear="$artist->releaseYear"
                                :image="$artist->image"
                                :artist="$artist"
                            />
                        
                        @endforeach

                        <x-alert-success>
                            {{session('success')}}
                        </x-alert-success>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





