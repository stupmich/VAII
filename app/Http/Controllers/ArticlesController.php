<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        return view('/articles/index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|image'
            ]);
        $imagePath = request('image')->store('uploads','public');

        auth()->user()->articles()->create([
            'title' => $data['title'],
            'text' => $data['text'],
            'image' => $imagePath
        ]);
        dd(request()->all());
        //return view('articles/index');
    }

    public function topics() {
        $view = view('/articles/topics');
        echo $view;
    }

    public function topicsAjax() {
        $articles = Article::all();
        $articleData['data'] = $articles;
        echo json_encode($articleData);
        exit;
    }
}
