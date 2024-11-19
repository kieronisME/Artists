@props(['action', 'method', 'album' => null])
<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <!-- dispalys old data -->
        <input type="text" name="title" id="title" value="{{ old('title', $album->title ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="releaseYear" class="block text-sm text-gray-700">releaseYear</label>
        <input type="text" name="releaseYear" id="releaseYear"
            value="{{ old('releaseYear', $album->releaseYear ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('releaseYear')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rating" class="block text-sm text-gray-700">rating</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating', $album->rating ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('rating')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="embedLink" class="block text-sm text-gray-700">embedLink</label>
        <label for="embedLink" class="block text-sm text-gray-700">Too add album of choice Spotify> Album of choice> click
            the . . .> share> embeded album> show code and copy the url only from https to the last word DONT INCLUDE "
            " </label>
        <input type="text" name="embedLink" id="embedLink" value="{{ old('embedLink', $album->embedLink ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('Songs')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror

    </div>
     

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Album Cover Image</label>
        <input type="file" name="image" id="image" {{ isset($album) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($album->image) 
        <div class="mb-4">
            <img src="{{ asset("ArtistImg/images/" . $album->image) }}" alt="Album cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($album) ? 'Update Album' : 'Add Album' }}
        </x-primary-button>
    </div>


</form>