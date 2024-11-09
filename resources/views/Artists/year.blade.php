<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('5-Star Songs') }}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">5 STAR SONGS</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($year as $iJustWantAn_A)  
                        <x-fiveStar-card
                            :title="$iJustWantAn_A->title"
                            :rating="$iJustWantAn_A->rating"
                            :releaseYear="$iJustWantAn_A->releaseYear"
                            :image="$iJustWantAn_A->image"
                            :artist="$iJustWantAn_A"
                        />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





