@props(['title', 'rating', 'releaseYear', 'image', 'artist'])

<div class="border rounded-lg shadow-md p-6 bg-black hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $title }}">
    <p class="text-gray-600">Release Year {{ $releaseYear }} </p>
    <p class="text-gray-800 mb-3">{{ $rating }} star Rating </p>
    
    
    <a href="{{ route('Artists.edit', $artist) }}" class="bg-green-800 rounded-lg mr-2 my-6 text-white py-2 px-2 hover:bg-green-700">
    Edit
</a>

    <a href="{{ route('Artists.show', $artist) }}" class="bg-blue-800 rounded-lg mr-4 my-6 text-white py-2 px-2 hover:bg-blue-400">
        View
    </a>

    <form action="{{ route('Artists.destroy', $artist) }}" method="POST" onsubmit="return confirm('This action is permanent!');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-800 rounded-lg mr-4 my-3 text-black py-1 px-1 hover:bg-red-300">
            Delete
        </button>
    </form>
</div>