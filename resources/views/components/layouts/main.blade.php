<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Viewer</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-columns: 250px 1fr;
            grid-template-rows: auto 1fr auto;
            min-height: 100vh;
            background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
        }

        header{
            grid-column: span 2;
            text-align: left;
            padding: 20px;
            background-color: #000000;
            background-image: linear-gradient(315deg, #000000 0%, #414141 74%);
            color: white;
            grid-row: 1;
        }

        footer {
            grid-column: span 2;
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        main {
            padding: 20px;
            overflow: auto;
        }

        sidebar {
            grid-row: 2;
            background-color: #f4f4f4;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .nav-options {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }

        .playlist-item {
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .playlist-item:hover {
            background-color: #ddd;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        a{
            text-decoration: none;
            color: white;
        }

        @media (max-width: 768px) {
            body {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto 1fr auto;
            }

            sidebar {
                grid-column: span 1;
                height: auto;
            }

            header, footer {
                grid-column: span 1;
            }
        }
    </style>
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
