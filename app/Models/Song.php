<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable=['title', 'artist'];

    //Getter and setter function for title field
    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    //Getter and setter function for artist field
    public function getArtist(){
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }
}