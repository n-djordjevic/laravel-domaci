<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MovieList;

class Movie extends Model
{
    use HasFactory;

    public function movieList()
    {
        return $this->belongsTo(MovieList::class);
    }
}
