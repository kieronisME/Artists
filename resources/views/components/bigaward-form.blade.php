@props(['action', 'method', 'bigaward' => null])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif
    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">name</label>
        <!-- dispalys old data -->
        <input type="text" name="name" id="name" value="{{ old('name', $bigaward->name ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="year" class="block text-sm text-gray-700">year</label>
        <input type="text" name="year" id="year"
            value="{{ old('year', $bigaward->year ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('year')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="rating" class="block text-sm text-gray-700">rating</label>
        <input type="text" name="rating" id="rating" value="{{ old('rating', $bigaward->rating ?? '') }}" required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
        @error('rating')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
     

    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">bigaward Cover image</label>
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