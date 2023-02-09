<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravelista\Comments\Comment;

class AdminCommentController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Comentarios - Online Store";
        $viewData["comment"] = Comment::all();
        return view('admin.comments.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        Comment::validate($request);

        $newComment = new Comment();
        $newComment->setCommenterId($request->input('commenter_id'));
        $newComment->setComment($request->input('comment'));
        $newComment->setCommentableId($request->input('commentable_id'));
        $newComment->save();

        return back();
    }

    public function delete($id)
    {
        Comment::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit comment - Online Store";
        $viewData["comment"] = Comment::findOrFail($id);
        return view('admin.comments.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        Comment::validate($request);

        $comment = Comment::findOrFail($id);
        $comment->setComment($request->input('comment'));
        $comment->save();
        return redirect()->route('admin.comments.index');
    }
}
