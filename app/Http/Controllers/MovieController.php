<?php


namespace App\Http\Controllers;

use App\Models\Movie;
use Validator;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

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

    public function admin_create_get()
    {
        return view('admin/movies/create');
    }

    public function admin_create_post(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title' => ['required', 'unique:movies,title'],
                'image_url' => ['required', 'url'],
                'published_year' => 'required',
                'is_showing' => 'required',
                'description' => 'required',
            ],
            [
                //エラーメッセージの記入
                'title.required' => 'title is required.',
                'title.unique' => 'title has to be unique.',
                'image_url.required' => 'image_url is required.',
                'image_url.url' => 'image_url has to be in the form of url.',
                'published_year.required' => 'published_year is required.',
                'is_showing.required' => 'status is required.',
                'description.required' => 'description is required.',
            ]
        );
        //エラー時の処理
        if ($validator->fails()) {
            return redirect('admin/movies/create')
                ->withErrors($validator)
                ->withInput();
        }
        //バリデーションが通った時の処理
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->image_url = $request->input('image_url');
        $movie->published_year = $request->input('published_year');
        if ($request->has('is_showing')) {
            $movie->is_showing = true;
        } else {
            $movie->is_showing = false;
        }
        $movie->description = $request->input('description');
        $movie->save();
        return redirect('admin/movies');
    }
       
}
