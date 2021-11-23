<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Genre extends Model
{

    public $timestamps = false;

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

    /**
     * @param string|null $search
     * @param int $start
     * @param int $count
     * @return array
     */
    public static function getPage(string $search = null, int $start = 0, int $count = 10): array
    {
        $query = self::query();
        if(!is_null($search) && $search != "") {
            $query = $query->where("genre_name", "LIKE", "%" . $search . "%");
        }
        return $query->get()
            ->sortBy("id", SORT_ASC)
            ->skip($start)
            ->take($count)
            ->toArray();
    }

    /**
     * @param string|null $search
     * @return int
     */
    public static function getTotalCount(string $search = null): int
    {
        $query = self::query();
        if(!is_null($search)) {
            $query = $query->where("genre_name", "like", "%" . $search . "%");
        }

        return $query->get()->count();
    }

}
