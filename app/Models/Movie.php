<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $fillable = ['title', 'image_url', 'published_year', 'is_showing', 'description'];

    public function getData()
    {
        $movies = DB::table($this->table)->get();
        return $movies;
    }
}
