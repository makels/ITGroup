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

        $films = $this->get()
            ->sortBy("films.id", SORT_ASC)
            ->toArray();
        return $this->fillGenres($films);
    }

    /**
     * Get page of films
     * @param string|null $search
     * @param int $start
     * @param int $count
     * @return array
     */
    public function getPage(string $search = null, int $start = 0, int $count = 10): array
    {
        $query = $this->query();
        if(!is_null($search) && $search != "") {
            $query = $query->where("film_name", "LIKE", "%" . $search . "%");
        }

        $films = $query->get()
            ->sortBy("id", SORT_ASC)
            ->skip($start)
            ->take($count)
            ->toArray();

        return $this->fillGenres($films);
    }

    /**
     * @param string|null $search
     * @return int
     */
    public function getTotalCount(string $search = null): int
    {
        $query = $this->query();
        if(!is_null($search)) {
            $query = $query->where("film_name", "like", "%" . $search . "%");
        }

        return $query->get()->count();
    }

    /**
     * @param array $films
     * @return array
     */
    private function fillGenres(array $films): array
    {
        $res = [];
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
