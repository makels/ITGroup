<?php
namespace App\Http\Controllers\FilmsManager;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GenresController extends Controller
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
        return view('genres');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getList(Request $request): JsonResponse
    {
        $start = $request->post("start");
        $length = $request->post("length");
        $searchValue = $request->post("search")["value"];
        $genres = Genre::getPage($searchValue, $start, $length);
        $data = [];
        foreach ($genres as $genre) {
            $data[] = [
                $genre["id"],
                $genre["genre_name"],
                '<a href="#">Preview</a>&nbsp;|&nbsp;<a href="#">Edit</a>&nbsp;|&nbsp;<a href="#">Delete</a>'
            ];
        }
        return response()->json([
            "data" => $data,
            "recordsTotal" => Genre::getTotalCount($searchValue),
            ]);
    }

    public function addGenre(Request $request): View
    {
        $genres = Genre::all();
        return view("add_genre");
    }

    public function deleteGenre(Request $request): View
    {

    }
}
