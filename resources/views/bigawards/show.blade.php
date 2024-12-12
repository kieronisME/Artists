<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Awards') }}
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
            <div class="bg-black bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-white">
                    <h3 class="font-semibold text-lg mb-4 flex justify-center ">Awards Details:</h3>
                    <x-bigaward-details
                     :album="$bigaward->album"
                     :name="$bigaward->name"
                     :year="$bigaward->year"
                     :image="$bigaward->image"
                      />
                      <div class="flex justify-center mb-5 ml-3 gap-3s">
                            @foreach($bigaward->albums as $Eduard)
                                    <div class="">
                                        <h4 class="font-semibold">{{ $Eduard->name }}</h4>
                                        <img src="{{asset('ArtistImg/images/' . $Eduard->image)}}" alt="{{ $Eduard->name }}" class="mt-2 rounded">
                                
                                    </div>
                                @endforeach
                       </div>
                        

                        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
