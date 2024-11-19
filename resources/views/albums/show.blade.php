<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Albums')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">Albums Details:</h3>
                    <x-album-Details
                        :title="$album->title"
                        :rating="$album->rating"
                        :releaseYear="$album->releaseYear"
                        :image="$album->image"
                        :embedLink="$album->embedLink"
                    />
            </div>
        </div>
    </div>
</x-app-layout>