@props(['title', 'rating', 'releaseYear', 'image', 'artist'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $title }}">
    <p class="text-gray-600">({{ $releaseYear }})</p>
    <p class="text-gray-800">({{ $rating }})</p>
    
    
    <a href="{{ route('Artists.edit', $artist) }}" class="bg-green-800">
        edit
    </a>

    <a href="{{ route('Artists.show', $artist) }}" class="bg-green-800">
        View
    </a>

    <form action="{{ route('Artists.destroy', $artist) }}" method="POST" onsubmit="return confirm('This action is permanent!');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-800">
            delete
        </button>
    </form>
</div>