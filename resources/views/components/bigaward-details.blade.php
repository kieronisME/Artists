@props(['album','name','year','image'])
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
   

        
    <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $album}}</h1>
        <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $name}}</h1>



        

        <div class="overflow-hidden rounded-lg mb-4 flex justify-center">

                

                <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $image }}"
            class="w-full max-w-xs h-auto object-cover">

            </div>



        

        <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $year }}</h2>
   


</div>

