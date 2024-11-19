@props(['title', 'rating', 'releaseYear', 'image', 'embedLink'])
<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300 max-w-xl mx-auto">
    <!-- Limit the overall container width to make the component more compact -->

        <!-- Album Title -->

        <h1 class="font-bold text-black-600 mb-2" style="font-size: 3rem;">{{ $title }}</h1>



        <!-- Album Cover Imagess -->

        <div class="overflow-hidden rounded-lg mb-4 flex justify-center">

                <!-- Image is further restricted to a smaller size -->

                <img src="{{ asset('ArtistImg/images/' . $image) }}" alt="{{ $image }}"
            class="w-full max-w-xs h-auto object-cover">

            </div>



        <!-- Publication releaseYear -->

        <h2 class="text-gray-500 text-sm italic mb-4" style="font-size: 1rem;">Published: {{ $releaseYear }}</h2>
    <!-- Emphasizing year with italics and smaller text -->



        <!-- Album Description -->

        <h3 class="text-gray-800 font-semibold mb-2" style="font-size: 2rem;">rating</h3>
    <!-- Subheading for description -->

        <p class="text-gray-700 leading-relaxed">{{ $rating }}</p> <!-- Text is spaced out for readability -->

<div class="mt-4">
<iframe style="border-radius:12px" src="{{ $embedLink }}" width="100%" height="352" frameBorder="0" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>

</div>