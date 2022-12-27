<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function saveComment(Request $request)
    {
        $comment = new Comment;
        $comment->comment_text = $request->comment;
        $comment->id = $request->post;
        $comment->save();

        return response()->json([
            'bool' => true,
        ]);
    }
}
?>