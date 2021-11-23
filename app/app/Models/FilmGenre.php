<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{

    public $timestamps = false;

    /** @var string $table */
    public $table = "films_genres";

    public function getGenresByFilmId(int $id): Collection
    {
        return $this->where("film_id", $id)->get();
    }
}
