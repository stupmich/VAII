<?php

namespace App\Http\Controllers;

use App\Models\Article;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        return view('/articles/index');
    }

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create($category, $subcategory) {
        return view('articles.create', ['category' => $category, 'subcategory' => $subcategory]);
    }

    public function store($category, $subcategory) {
        $data = request()->validate([
            'title' => 'required',
            'text' => 'required',
            ]);

        $user = auth()->user();
        $name = $user->name;

        auth()->user()->articles()->create([
            'title' => $data['title'],
            'text' => $data['text'],
            'username' => $name,
            'category' => $category,
            'subcategory' => $subcategory,
        ]);
        return view('/articles/topics', ['category' => $category, 'subcategory' => $subcategory]);
    }

    public function topics($category, $subcategory) {
        return view('/articles/topics', ['category' => $category, 'subcategory' => $subcategory]);
    }

    public function topicsAjax($subcategory) {
        $articles = Article::all()->where('subcategory',$subcategory);

        $articlesSorted = array();
        foreach ($articles as &$art) {
            array_push($articlesSorted, $art);
        }

        $articleData['data'] = $articlesSorted;
        echo json_encode($articleData);

        exit;
    }

    public function topic($id) {
        return view('/articles/topic',['id' => $id]);
    }

    public function topicAjax($id) {
        $article = Article::all()->where('id', $id);

        $articleSorted = array();
        foreach ($article as &$art) {
            array_push($articleSorted, $art);
        }

        $articleData['data'] = $articleSorted;
        echo json_encode($articleData);
        exit;
    }

    public function topicUserAjax($id) {
        $article = Article::find($id);
        $user = $article->user;

        $articleData['data'] = $user;
        echo json_encode($articleData);
        exit;
    }
}
