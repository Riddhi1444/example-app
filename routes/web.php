<?php

use Illuminate\Support\Facades\Route;
// use Practicals\Song;
use App\Models\Song;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies/{sabji}', function ($sabji) {
   
    return $sabji;
})->whereIn('sabji', ['baigan', 'bhindi', 'aaloo', 'gobhi']);

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/hello', function () {
    return view('veggies');
});

// On route '/veggies 'a chart should be seen , with name and price of veggies
Route::get('/veggies', function () {
    return view('table');
});
Route::get('/songs_static', function () {
    return view('songs_static'); 
  });
  Route::get('/playlists/{playlistId}', function (string $playlistId) {
    return view('playlist', ['songs' => Song::all(), 'playlistId' => $playlistId ]);
  });

  


  Route::get('/songs', function () {
// $song1 = new Song();
    // $song1->setTitle("Stan");
    // $song1->setArtist("Eminem");
  
    // $song2 = new Song();
    // $song2->setTitle("Nothing Else Matters");
    // $song2->setArtist("Metallica");
  
    // $song3 = new Song();
    // $song3->setTitle("With You");
    // $song3->setArtist("A P Dhillon");
    return view('songs', [ 'songs' => Song::all() ] );
});