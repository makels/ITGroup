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
                'genre_id' => 4,
            ),
            1 => 
            array (
                'film_id' => 2,
                'genre_id' => 4,
            ),
            2 => 
            array (
                'film_id' => 3,
                'genre_id' => 1,
            ),
            3 => 
            array (
                'film_id' => 4,
                'genre_id' => 4,
            ),
            4 => 
            array (
                'film_id' => 5,
                'genre_id' => 3,
            ),
            5 => 
            array (
                'film_id' => 6,
                'genre_id' => 4,
            ),
            6 => 
            array (
                'film_id' => 7,
                'genre_id' => 1,
            ),
            7 => 
            array (
                'film_id' => 8,
                'genre_id' => 2,
            ),
            8 => 
            array (
                'film_id' => 9,
                'genre_id' => 4,
            ),
            9 => 
            array (
                'film_id' => 10,
                'genre_id' => 2,
            ),
            10 => 
            array (
                'film_id' => 11,
                'genre_id' => 3,
            ),
            11 => 
            array (
                'film_id' => 12,
                'genre_id' => 1,
            ),
            12 => 
            array (
                'film_id' => 13,
                'genre_id' => 1,
            ),
            13 => 
            array (
                'film_id' => 14,
                'genre_id' => 2,
            ),
            14 => 
            array (
                'film_id' => 15,
                'genre_id' => 3,
            ),
            15 => 
            array (
                'film_id' => 16,
                'genre_id' => 2,
            ),
            16 => 
            array (
                'film_id' => 17,
                'genre_id' => 3,
            ),
            17 => 
            array (
                'film_id' => 18,
                'genre_id' => 1,
            ),
            18 => 
            array (
                'film_id' => 19,
                'genre_id' => 2,
            ),
            19 => 
            array (
                'film_id' => 20,
                'genre_id' => 4,
            ),
            20 => 
            array (
                'film_id' => 21,
                'genre_id' => 4,
            ),
            21 => 
            array (
                'film_id' => 22,
                'genre_id' => 2,
            ),
            22 => 
            array (
                'film_id' => 23,
                'genre_id' => 4,
            ),
            23 => 
            array (
                'film_id' => 24,
                'genre_id' => 2,
            ),
            24 => 
            array (
                'film_id' => 25,
                'genre_id' => 4,
            ),
            25 => 
            array (
                'film_id' => 26,
                'genre_id' => 2,
            ),
            26 => 
            array (
                'film_id' => 27,
                'genre_id' => 4,
            ),
            27 => 
            array (
                'film_id' => 28,
                'genre_id' => 2,
            ),
            28 => 
            array (
                'film_id' => 29,
                'genre_id' => 1,
            ),
            29 => 
            array (
                'film_id' => 30,
                'genre_id' => 2,
            ),
            30 => 
            array (
                'film_id' => 31,
                'genre_id' => 2,
            ),
            31 => 
            array (
                'film_id' => 32,
                'genre_id' => 1,
            ),
            32 => 
            array (
                'film_id' => 33,
                'genre_id' => 2,
            ),
            33 => 
            array (
                'film_id' => 34,
                'genre_id' => 1,
            ),
            34 => 
            array (
                'film_id' => 35,
                'genre_id' => 2,
            ),
            35 => 
            array (
                'film_id' => 36,
                'genre_id' => 4,
            ),
        ));
        
        
    }
}