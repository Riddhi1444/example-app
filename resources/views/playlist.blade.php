<x-layouts.main pageName="Playlist {{$playlistId}}">

@section('content')
<x-layouts.songs-list :songs="$songs">
</x-layouts.songs-list>
@endsection

</x-layouts.main>
