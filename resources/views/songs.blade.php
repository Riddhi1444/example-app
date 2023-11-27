<x-layouts.main pageName="All Songs">
@section('content')
<x-layouts.songs-list :songs="$songs">
</x-layouts.songs-list>
@endsection

</x-layouts.main>