<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieApiController extends Controller
{
    public function getAll()
    {
        return Movie::all();
    }

    public function getMovieFromList($movie_list_id)
    {
        $movies = Movie::where('movie_list_id', $movie_list_id)->get();

        $output = "";

        if ($movies) {
            foreach ($movies as $movie) {
                if ($movie) {
                    $output .= '<tr>' .
                        '<td>' . $movie->title . '</td>' .
                        '<td>' . $movie->director . '</td>' .
                        "<td><a id=" . $movie->id . " class='btn btn-outline-dark' href='#' role='button'>Edit</a> <a id=" . $movie->id . " class='btn btn-dark' href='#' role='button'>Delete</a></td>" .
                        '</tr>';
                }
            }
            return Response($output);
        }
    }


    public function insert()
    {
        request()->validate([
            'title' => 'required',
            'director' => 'required',
            'movie_list_id' => 'required'
        ]);

        return Movie::create([
            'title' => request('title'),
            'director' => request('director'),
            'movie_list_id' => request('movie_list_id')
        ]);
    }

    public function update(Movie $movie)
    {
        request()->validate([
            'title' => 'required',
            'director' => 'required',
            'movie_list_id' => 'required'
        ]);

        $success = $movie->update([
            'title' => request('title'),
            'director' => request('director'),
            'movie_list_id' => request('movie_list_id')
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Movie $movie)
    {
        $success = $movie->delete();

        return [
            'success' => $success
        ];
    }
}
