<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Albums') }}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Albums Details:</h3>
                    <x-album-Details :title="$album->title" :rating="$album->rating" :releaseYear="$album->releaseYear"
                        :image="$album->image" :embedLink="$album->embedLink" />
                    <h4 class="font-semibold text-md mt-8">Reviews</h4>
                    @if($album->review->isEmpty())
                        <p class="text-gray-600">No Reviews yet</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach ($album->reviews as $comment)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">
                                        {{ $comment->user->name }} ({{ $comment->created_at->format('M d, Y') }})
                                    </p>
                                    <p>Review: {{ $comment->comment }}</p>
                                    <p>Rating: {{ $comment->rating }} /5</p>

                                    @if ($comment->user->is(auth()->user()) || auth()->user()->role === 'admin')
                                        <a href="{{ route('reviews.edit', $comment) }}" class="bg-yellow-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                                            {{ __('Edit Review') }}
                                        </a>

                                        <form action="{{ route('reviews.destroy', $comment) }}" method="POST" onsubmit="return confirm('This action is permanent!');">
                                            @csrf
                                            @method('delete')
                                            <x-danger-button onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Delete Review') }}
                                            </x-danger-button>
                                        </form>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <h4 class="font-semibold text-md mt-8">Add a Review</h4>
                    <form action="{{ route('rating.store', $album) }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label for="rating" class="block font-medium text-sm text-gray-700">User Rating</label>
                            <select name="rating" id="rating" class="mt-1 block w-full" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="review" class="block font-medium text-sm text-gray-700">Comment</label>
                            <textarea name="review" id="review" rows="3" class="mt-1 block w-full" placeholder="Write a Review"></textarea>
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add a Rating
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
