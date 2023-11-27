<html>
<title>Songs Page</title>
<body>
<h2>Song - Blade Template</h2>

<table>
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->title }}</td>
<td>{{ $song->artist }}</td>
</tr>
@endforeach
</table>
</body>
</html>