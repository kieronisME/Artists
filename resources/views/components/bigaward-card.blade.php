@props(['album', 'name', 'year', 'image', 'bigaward'])

<div class="border rounded-lg shadow-md p-6 bg-black hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $album }}</h4>
    <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $album }}">
    <p class="text-gray-600">year {{ $year }} </p>
    <p class="text-gray-800 mb-3">{{ $name }} name </p>

    @if(auth()->user()->role === 'admin')
        <a href="{{ route('Bigawards.edit', $bigaward) }}"
            class="bg-green-800 rounded-lg mr-2 my-6 text-white py-2 px-2 hover:bg-green-700">
            Edit
        </a>
    @endif

    <a href="{{ route('Bigawards.show', $bigaward) }}"
        class="bg-blue-800 rounded-lg mr-4 my-6 text-white py-2 px-2 hover:bg-blue-400">
        View
    </a>

    @if(auth()->user()->role === 'admin')
    <form action="{{ route('Bigawards.destroy', $bigaward) }}" method="POST"
        onsubmit="return confirm('This action is permanent!');">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-800 rounded-lg mr-4 my-3 text-black py-1 px-1 hover:bg-red-300">
            Delete
        </button>
    </form>
    @endif

</div>