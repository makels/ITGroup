<?php
namespace App\Http\Controllers\FilmsManager;

use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

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
        return view('home');
    }

    public function addFilm(Request $request): View
    {

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
            "totalPages" => 3,
            "currentPage" => 1
        ]);
    }

    public function getListByGenre(Request $request)
    {

    }

    public function preview(Request $request)
    {

    }

}
