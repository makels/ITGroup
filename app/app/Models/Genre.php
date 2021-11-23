<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Genre extends Model
{

    /**
     * Get genres by id`s
     * @param array|null $ids
     * @return Collection
     */
    public function getGenres(array $ids = null): Collection
    {
        if(is_null($ids)) return $this->query()->get();
        return $this->query()->whereIn("id", $ids)->get();
    }

}
