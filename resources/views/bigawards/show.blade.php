<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Awards') }}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Award Details:</h3>
                    <x-bigaward-details
                     :album="$bigaward->album"
                     :name="$bigaward->name"
                     :year="$bigaward->year"
                     :image="$bigaward->image"
                      />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
