<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Albums') }}
        </h2>
    </x-slot>

    <div class="relative">
        <video autoplay loop muted class="fixed top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('ArtistImg/vid/lucki.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-black opacity-50 z-10"></div> <!-- Dark overlay -->
    </div>

    <div class='relative py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-black  bg-opacity-75 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="flex justify-center font-semibold text-lg mb-4 text-white">Albums Details:</h3>
                    <x-album-Details :title="$album->title" :rating="$album->rating" :releaseYear="$album->releaseYear"
                        :image="$album->image" :embedLink="$album->embedLink" />

                    <h3 class="flex justify-center font-semibold text-lg mt-6 text-white">Awards:</h3>
                    <div class="flex justify-center mb-5">
                        @foreach($album->bigawards as $Eduard)
                            <div class="bg-black border p-4 rounded-lg shadow-md text-white">
                                <h4 class="font-semibold">{{ $Eduard->name }}</h4>
                                <img src="{{asset('ArtistImg/images/' . $Eduard->image)}}" alt="{{ $Eduard->name }}" class="mt-2 rounded">
                            </div>
                        @endforeach
                    </div>


                    <h4 class="font-semibold text-white text-md mt-8">Reviews</h4>
                    @if($album->reviews->isEmpty())
                        <p class="text-white">No Reviews yet</p>
                    @else
                        <ul class="mt-4 space-y-4">
                            @foreach ($album->reviews as $review)
                                <li class="bg-gray-100 p-4 rounded-lg">
                                    <p class="font-semibold">{{ $review->user->name }}
                                        ({{ $review->created_at->format('M d, Y') }})</p>
                                    <p>Rating: {{ $review->rating }} /5</p>
                                    <p>{{ $review->comment }} </p>

                                    @if ($review->user->is(auth()->user()) || auth()->user()->role === 'admin')
                                        <a href="{{ route('reviews.edit', $review) }}"
                                            class="bg-yellow-500 hover:bg-orange-700  text-white font-bold mx-4 py-2 px-4 rounded">
                                            {{ __('Edit Review') }}
                                        </a>

                                        <form method="POST" action="{{ route('reviews.destroy', $review) }}">
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

                    <!-- ADDING REV -->
                    <h4 class="font-semibold text-white text-md mt-8">Add a Review</h4>
                    <form action="{{ route('reviews.store', $album) }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label for="rating" class="block font-medium text-sm text-white"> Rating</label>
                            <select name="rating" id="rating" class="mt-1 block w-full" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="comment" class="block font-medium text-sm text-white">Comment</label>
                            <textarea name="comment" id="comment" rows="3" class="mt-1 block w-full"
                                placeholder="Write a review here..."></textarea>
                        </div>

                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            sumbmit to me
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>