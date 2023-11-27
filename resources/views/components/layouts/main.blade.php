<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Viewer</title>
    <link href="{{ asset('css/layout/main.css') }}" rel="stylesheet" />
</head>
<body>
    <header>
        <h5>Playlist</h6>
        <h1>Daily Mix 1</h1>
        <p>A playlist consisting of your fav artists</p>
    </header>

    <sidebar>
        <div class="nav-options">Home</div>
        <div class="nav-options">Search</div>
        <div class="nav-options">My Playlists</div>
        <div class="playlist-item">Playlist 1</div>
        <div class="playlist-item">Playlist 2</div>
    </sidebar>

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
                <tr>
                    <td>1</td>
                    <td>Song 1</td>
                    <td>Artist 1</td>
                    <td>Album 1</td>
                    <td>3:30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Song 2</td>
                    <td>Artist 2</td>
                    <td>Album 2</td>
                    <td>4:15</td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 Playlist Viewer | <a href="#">About</a> | <a href="#">Privacy</a></p>
    </footer>
</body>
</html>