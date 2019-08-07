<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use \App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        $article = Article::where(
            [
                'is_publish' => 1
            ]
        )->paginate(2);
        return view('blog.blog', ['article' => $article]);
    }

    public function blogDetails($slug) {
        $article = Article::where('slug', $slug)->first();
        $comments = Comment::where('article_id',$article->id)->paginate(3);
        return view('blog.blog-details', [
            'article' => $article, 'comments' => $comments
        ]);
    }

    public function addComment($id=null, Request $request) {
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->text = $request->text;
        $comment->article_id = $request->article_id;
        $comment->user_id = Auth::id();
        $comment->fill($request->only('name', 'email', 'text', 'article_id', 'user_id'));
        $comment->save();
        dd($comment);
        return redirect(route('blog.addComment'));
    }

}