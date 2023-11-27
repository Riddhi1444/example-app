<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require(__DIR__.'/../../practicals/Song.php');
use songs\Song;

class SongTest extends TestCase
{
    public function testSetTempo(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $song->setTempo(60);
        $result = $song->getTempo();
        $this->assertEquals(60, $result);
    }
    public function testSetTempoAcceptsIntegerString(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $song->setTempo("60");
        $result = $song->getTempo();
        $this->assertEquals(60, $result);
    }
    public function testSetTempoRejectsAlphabetString(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo("60 BPM");
    }
    public function testSetTempoRejectsFloat(): void
    {
        $song = new Song("Title", "Artist", "Genre", 120);
        $this->expectException(\InvalidArgumentException::class);
        $song->setTempo(60.5);
    }
    


    // Add other test methods for your different cases
}