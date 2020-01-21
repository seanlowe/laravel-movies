<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public static function list() {
        $movies = Movie::orderBy('released', 'DESC')->get();
        return $movies;
    }
}