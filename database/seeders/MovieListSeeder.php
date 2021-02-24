<?php

namespace Database\Seeders;

// failed attempt at using model factories
// use App\Models\Movie;
// use App\Models\User;
// use App\Models\MovieList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MovieList::factory()
        //     ->count(2)
        //     ->has(Movie::factory()->count(3))
        //     ->for(User::factory()->state([
        //         'id' => 1,
        //     ]))
        //     ->create();

        DB::table('movie_lists')->insert([
            [
                'title' => 'Odgledani filmovi',
                'description' => 'Filmovi u kojima sam uzivao',
                'user_id' => 1
            ]
        ]);
    }
}
