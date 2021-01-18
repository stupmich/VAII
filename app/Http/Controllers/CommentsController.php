<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function send(Request $request) {
        dd($request->all());
        $user = auth()->user();
        $userID = $user->id;
        $comment = Comment::create([
            'user_id' => $userID,
            'article_id' => 1,
            'text' => $request['reply'],
            ]);


        $comment->save();

    }


    public function commentsAjax($id) {
        $comment = Comment::all()->where('article_id', $id);
        $articleData['data'] = $comment;
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
