<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Album') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Update Album: {{ $album->title }}</h3>
                    <!-- laravl knows this from is a link to album.form so it directs it there -->
                     <!-- sends the request back to update route -->
                    <x-album-form 
                        :action="route('Albums.update', $album->id)" 
                        method="PUT" 
                        :album="$album"
                    />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
