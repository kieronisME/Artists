@props(['action', 'method'])
<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $artist->title ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        @error('title') 
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="releaseYear" class="block text-sm text-gray-700">releaseYear</label>
        <input type="text" name="releaseYear" id="releaseYear" value="{{ old('releaseYear', $artist->releaseYear ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        @error('releaseYear') 
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rating" class="block text-sm text-gray-700">rating</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating', $artist->rating ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        @error('rating') 
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    
    <div class="mb-4">
        <label for="Songs" class="block text-sm text-gray-700">Song</label>
        <input type="text" name="Songs" id="Songs" value="{{ old('Songs', $artist->Songs ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        @error('Songs') 
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>  
  

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Artist Cover Image</label>
        <input type="file" name="image" id="image" {{ isset($artist) ? '' : 'required' }} class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($artist->image) 
        <div class="mb-4">
            <img src="{{ asset($artist->image) }}" alt="Artist cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($artist) ? 'Update Artist' : 'Add Artist' }}
        </x-primary-button>
    </div>

 
</form>