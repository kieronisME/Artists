@props(['title', 'rating', 'releaseYear', 'image', 'album'])

<div class="border rounded-lg shadow-md p-6 bg-black hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $title }}">
    <p class="text-white">Release Year {{ $releaseYear }} </p>
    <p class="text-white mb-3">{{ $rating }} star Rating </p>



    <a href="{{ route('Albums.show', $album) }}"
        class="bg-blue-800 rounded-lg mr-4 my-6 text-white py-2 px-2 hover:bg-blue-400">
        View
    </a>



<!-- you -->
 



       



</div>