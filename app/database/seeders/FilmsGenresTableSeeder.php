<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsGenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('films_genres')->delete();
        
        \DB::table('films_genres')->insert(array (
            0 => 
            array (
                'film_id' => 1,
                'genre_id' => 1,
            ),
            1 => 
            array (
                'film_id' => 2,
                'genre_id' => 4,
            ),
            2 => 
            array (
                'film_id' => 3,
                'genre_id' => 2,
            ),
        ));
        
        
    }
}