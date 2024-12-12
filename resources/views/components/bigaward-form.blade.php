@props(['action', 'method', 'bigaward'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="album" class="block text-sm text-white">Album</label>
        <input type="text" name="album" id="album" value="{{ old('album', $bigaward->album ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('album')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="name" class="block text-sm text-white">name</label>
        <!-- dispalys old data -->
        <input type="text" name="name" id="name" value="{{ old('name', $bigaward->name ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="year" class="block text-sm text-white">year</label>
        <input type="text" name="year" id="year"
            value="{{ old('year', $bigaward->year ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('year')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

 

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-white">bigaward Cover image</label>
        <input type="file" name="image" id="image" {{ isset($bigaward) ? '' : 'required' }}
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    @isset($bigaward->image) 
        <div class="mb-4">
            <img src="{{ asset("ArtistImg/images/" . $bigaward->image) }}" alt="bigaward cover" class="w-24 h-32 object-cover">
        </div>
    @endisset

    <div>
        <x-primary-button>
            {{ isset($bigaward) ? 'Update bigaward' : 'Add bigaward' }}
        </x-primary-button>
    </div>


</form>