<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('All Albums')}}
        </h2>
    </x-slot>

    <div class='py-12'>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">Albums Details:</h3>
                    <x-album-Details
                        :title="$album->title"
                        :rating="$album->rating"
                        :releaseYear="$album->releaseYear"
                        :image="$album->image"
                        :embedLink="$album->embedLink"
                    />
<h4 class="font-semibold text-md mt-8"> Proucers</h4>
@if($album->comment->isEmpty())
<p class="test-gray-600"> no Producers yet</p>
@endif
<ul class="mt-4 space-y-4">
    @foreach ( $album->comments as $comment )
    <il class="bg-gray-100 p-4 rounded-lg">
        <p class="font font-semibold">{{ $comment->user->name}}{{$comment->created_at->format('M d, Y')}}</p>
        <p>{name: {$proucer}}</p>


    </il>
    


    @endforeach

</ul>











                    
            </div>
        </div>
    </div>
</x-app-layout>