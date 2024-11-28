<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 bg-black-800 leading-tight">
            {{__('All Aawrds')}}
        </h2>
    </x-slot>

    <div class='py-12 bg-black '>
        <div class="max-w-7xl mx-auto sm:px-6  bg-black lg:px-8">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">List of Awards:</h3>


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 bg-black-800">
                    @foreach($Bigaward as $bigaward)  
                       
                    <x-bigaward-card 
                        :album="$bigaward->album" 
                        :name="$bigaward->name" 
                        :year="$bigaward->year" 
                        :image="$bigaward->image" 
                        :bigaward="$bigaward" 
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