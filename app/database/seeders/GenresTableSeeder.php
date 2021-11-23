<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'id' => 1,
                'genre_name' => 'Comedy',
            ),
            1 => 
            array (
                'id' => 2,
                'genre_name' => 'Horor',
            ),
            2 => 
            array (
                'id' => 3,
                'genre_name' => 'Documental',
            ),
            3 => 
            array (
                'id' => 4,
                'genre_name' => 'Liric',
            ),
        ));
        
        
    }
}