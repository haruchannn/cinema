<?php


namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('movies', ['movies' => $movies]);
    }

    public function admin()
    {
        $movies = Movie::all();
        return view('admin/movies', ['movies' => $movies]);
    }
}
