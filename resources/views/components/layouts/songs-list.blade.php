<main>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Artists</th>
                    <th>Album</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($songs as $song)
<tr>
<td>{{ $song->id}}</td>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
<td>3:30</td>
</tr>
@endforeach
              
            </tbody>
        </table>
    </main>