<?php

namespace Database\Seeders;

// failed attempt at using model factories
// use App\Models\Movie;
// use App\Models\MovieList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Movie::factory()
        //     ->count(2)
        //     ->for(MovieList::factory()->state([
        //         'movie_list_id' => 2,
        //     ]))
        //     ->create();

        DB::table('movies')->insert([
            [
                'title' => 'Jumanji: Welcome to the Jungle',
                'director' => 'Jake Kasdan',
                'movie_list_id' => 1
            ],
            [
                'title' => 'Terminator 2: Judgment Day',
                'director' => 'James Cameron',
                'movie_list_id' => 1
            ],
            [
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'movie_list_id' => 1
            ],
            [
                'title' => 'The Matrix',
                'director' => 'The Wachowski Brothers',
                'movie_list_id' => 1
            ]
        ]);
    }
}
