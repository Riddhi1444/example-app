<?php

/**
 * Class Song represents a music song with properties like title, artist, genre, and tempo.
 */
class Song {
    /**
     * @var string The title of the song.
     */
    private $title;

    /**
     * @var string The artist of the song.
     */
    private $artist;

    /**
     * @var string The genre of the song.
     */
    private $genre;

    /**
     * @var string The tempo of the song.
     */
    private $tempo;

    /**
     * Song constructor.
     *
     * @param string $title  The title of the song.
     * @param string $artist The artist of the song.
     * @param string $genre  The genre of the song.
     * @param string $tempo  The tempo of the song.
     */
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    /**
     * Get the title of the song.
     *
     * @return string The title of the song.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     *
     * @param string $title The title of the song.
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     *
     * @return string The artist of the song.
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     *
     * @param string $artist The artist of the song.
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     *
     * @return string The genre of the song.
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     *
     * @param string $genre The genre of the song.
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song.
     *
     * @return string The tempo of the song.
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song.
     *
     * @param string $tempo The tempo of the song.
     */
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

// Example usage:

// Create a new Song instance
$mySong = new Song("Wonderful Tonight", "Eric Clapton", "Blues", "Slow");

// Get and display song details
echo "Title: " . $mySong->getTitle() . PHP_EOL;
echo "Artist: " . $mySong->getArtist() . PHP_EOL;
echo "Genre: " . $mySong->getGenre() . PHP_EOL;
echo "Tempo: " . $mySong->getTempo() . PHP_EOL;

// Update the song title and display the updated title
$mySong->setTitle("Tears in Heaven");
echo "Updated Title: " . $mySong->getTitle() . PHP_EOL;

