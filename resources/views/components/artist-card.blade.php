@props(['title','rating','releaseYear','image'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
<h4 class="font-bold text-lg">{{ $title }}</h4>
<img src="{{asset('ArtistImg/images/' . $image)}}" alt="{{$title}}">
<p class="text-gray-600">({{ $releaseYear }})</p>
<p class="text-gray-800">({{ $rating }})</p>
</div>


