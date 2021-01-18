<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $id) {
        $user = auth()->user();
        $userID = $user->id;
        $comment = Comment::create([
            'user_id' => $userID,
            'article_id' => $id,
            'text' => $request['reply'],
            ]);

        $comment->save();
        return view('/articles/topic', ['id' => $id]);
    }


    public function commentsAjax($id) {
        $comments = Comment::all()->where('article_id', $id);

        $commsorted = array();
        foreach ($comments as &$comm) {
            array_push($commsorted, $comm);
        }

        $articleData['data'] = $commsorted;
        echo json_encode($articleData);
        exit;
    }

    public function commentsUserAjax($id) {

        $article = Article::find($id);
        $comments = $article->comments;
        $users = array();
        foreach ($comments as &$comm) {
            array_push($users, $comm->user);
        }

        $articleData['data'] = $users;
        echo json_encode($articleData);
        exit;
    }
}
