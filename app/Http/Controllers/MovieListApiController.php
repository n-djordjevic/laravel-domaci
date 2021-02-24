<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\MovieList;

class MovieListApiController extends Controller
{
    public function getAll()
    {
        return MovieList::all();
    }

    public function insert()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        return MovieList::create([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => request('user_id')
        ]);
    }

    public function update(MovieList $movieList)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ]);

        $success = $movieList->update([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => request('user_id')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(MovieList $movieList)
    {
        $success = $movieList->delete();

        return [
            'success' => $success
        ];
    }
}
