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
            ]);

        $imagePath = request('image')->store('uploads','public');

        $user = auth()->user();
        $name = $user->name;

        auth()->user()->articles()->create([
            'title' => $data['title'],
            'text' => $data['text'],
            'image' => $imagePath,
            'username' => $name
        ]);
        dd(request()->all());

    }

    public function topics($name) {
        return view('/articles/topics');
    }

    public function topicsAjax() {
        $articles = Article::all();
        $articleData['data'] = $articles;
        echo json_encode($articleData);
        exit;
    }

    public function topic() {
        return view('/articles/topic');
    }

    public function topicAjax($id) {
        $article = Article::all()->where('id', $id);
        $articleData['data'] = $article;
        echo json_encode($articleData);
        exit;
    }
}
