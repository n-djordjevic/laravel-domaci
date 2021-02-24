<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieList;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'director', 'movie_list_id'
    ];
    public $timestamps = false;
    public function movieList()
    {
        return $this->belongsTo(MovieList::class);
    }
}
