<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>
<body>
    <h2>Songs</h2>

    <table border='1'>
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
        <tr>
            <td>{{ $song -> getTitle() }}</td>
            <td>{{ $song -> getArtist() }}</td>
        </tr>
        @endforeach
    </table>    
    
</body>
</html>
