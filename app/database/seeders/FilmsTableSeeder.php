<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('films')->delete();

        \DB::table('films')->insert(array (
            0 =>
            array (
                'id' => 1,
                'film_name' => 'The dog "Richi"',
                'preview_url' => '/storage/app/public/films_img/1.jpg',
                'publish' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'film_name' => 'Sky in orange',
                'preview_url' => '/storage/app/public/films_img/2.jpg',
                'publish' => 0,
            ),
            2 =>
            array (
                'id' => 3,
                'film_name' => 'Shark',
                'preview_url' => '/storage/app/public/films_img/3.jpg',
                'publish' => 0,
            ),
        ));


    }
}
