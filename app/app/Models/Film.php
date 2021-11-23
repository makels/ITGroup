<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Film extends Model
{

    /**
     * Get all films
     * @return array
     */
    public function getAll(): array
    {
        $res = [];
        $films = $this->get()
            ->sortBy("films.id", SORT_ASC)
            ->toArray();

        foreach($films as $film) {
            $film["genres"] = $this->query()
                ->leftJoin("films_genres", "films.id", "=", "films_genres.film_id")
                ->leftJoin("genres", "genres.id", "=", "films_genres.genre_id")
                ->where("films.id", $film["id"])
                ->get(["genre_id", "genre_name"])
                ->sortBy("films.id", SORT_ASC)
                ->toArray();

            $res[] = $film;
        }
        return $res;
    }

}
