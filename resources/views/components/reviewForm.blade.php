@props(['action', 'method', 'album', 'review'])

<form action="{{$action}}" method="POST" enctype="multipart/form-data">

    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="comment" class="block text-sm font medium text-gray-300">Comment</label>
        <input type="text" name="comment" id="comment" value="{{old('comment', $review->comment ?? '')}}" required
            class="mt-1 block w-full border-gray-300 shadow-sm focus:ring-indgo-500" />
        @error('comment')
            <p class="text-red-600 text-sm ">{{ $message }}</p>
        @enderror
    </div>
    <x-primary-button>
        {{isset($review) ? 'Update Review' : 'Save Review'}}
    </x-primary-button>
</form>
