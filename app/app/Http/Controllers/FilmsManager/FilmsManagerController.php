<?php
namespace App\Http\Controllers\FilmsManager;

use App\Http\Controllers\Controller;

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
        $films = new FilmsModel();

        return view('home');
    }



}
