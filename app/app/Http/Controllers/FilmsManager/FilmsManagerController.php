<?php
namespace App\Http\Controllers\FilmsManager;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
    public function index(): View
    {
        return view('films');
    }

    /**
     * @param Request $request
     * @return View|RedirectResponse
     */
    public function addFilm(Request $request): View
    {
        if($request->method() == "POST") {
            $film_name = $request->post('film_name');
            $poster_file = "";
            $genres = $request->post('genre');
            $poster = $request->file('poster');
            if(!is_null($poster)) {
                $poster_file = $poster->getClientOriginalName();
                $destinationPath = storage_path('/app/public/films_img');
                $poster->move($destinationPath,$poster_file);
            }

            $film = new Film();
            $film->film_name = $film_name;
            $film->preview_url = url("storage/films_img/" . $poster_file);
            $film->publish = 0;
            if($film->save()) {
                foreach ($genres as $genre_id => $checked) {
                    if($checked == "on") {
                        $genres = new FilmGenre();
                        $genres->film_id = $film->id;
                        $genres->genre_id = $genre_id;
                        $genres->save();
                    }
                }
            }
            return Redirect::route("films");
        } else {
            $genres = Genre::all();
            return view("film_add",[
                "genres" => $genres
            ]);
        }
    }

    public function deleteFilm(Request $request): View
    {

    }

    public function getList(Request $request): JsonResponse
    {
        $start = $request->post("start");
        $length = $request->post("length");
        $searchValue = $request->post("search")["value"];

        $list = [];
        $filmModel = new Film();
        $films = $filmModel->getPage($searchValue, $start, $length);
        foreach($films as $film) {
            $genres = [];
            foreach ($film["genres"] as $genre) {
                $genres[] = $genre['genre_name'];
            }
            $list[] = [
                $film["id"],
                '<img class="poster_img" src="' . url($film['preview_url']) . '" alt="' . $film['film_name'] . '" />',
                $film['film_name'],
                implode(", ", $genres),
                $film["publish"] == 0 ? "Not publish" : "Publish",
                '<a href="#">Preview</a>&nbsp;|&nbsp;<a href="#">Edit</a>&nbsp;|&nbsp;<a href="#">Delete</a>'
            ];
        }
        return response()->json([
            "data" => $list,
            "recordsTotal" => $filmModel->getTotalCount($searchValue),
        ]);
    }

    public function getListByGenre(Request $request)
    {

    }

    public function preview(Request $request)
    {

    }

}
