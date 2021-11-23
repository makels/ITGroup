<?php
namespace App\Http\Controllers\FilmsManager;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class FilmsManagerController extends Controller
{

    /**
     * FilmsManagerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Files table
     */
    public function index()
    {
        $data = [];
        $filmModel = new Film();
        $films = $filmModel->getAll();
        $data["films"] = $films;
        return view('home', $data);
    }

    public function setGenres()
    {
        for($i = 1; $i <= 36; $i++) {
            $sql = sprintf("INSERT INTO `films_genres` (`film_id`, `genre_id`) VALUES (%s, %s)", $i, rand(1,4));
            DB::insert($sql);
        }
    }



}
