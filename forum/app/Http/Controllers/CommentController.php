<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($discussionId)
    {
        $discussion = Discussion::findOrFail($discussionId);
        return view('create_comment', compact('discussion'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'discussion_id' => 'required|exists:discussions,id'
        ]);

        Comment::create([
            'content' => $request->content,
            'discussion_id' => $request->discussion_id,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('dashboard');
    }
    public function edit(Comment $comment)
    {
        if (auth()->id() !== $comment->user_id) {
            abort(403);
        }

        return view('edit_comment', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        if (auth()->id() !== $comment->user_id) {
            abort(403);
        }

        $request->validate([
            'content' => 'required|string'
        ]);

        $comment->update([
            'content' => $request->content
        ]);

        return redirect()->route('show', $comment->discussion_id);
    }


    public function destroy(Comment $comment)
    {
        if (auth()->id() !== $comment->user_id) {
            abort(403);
        }

        $comment->delete();

        return redirect()->route('show', $comment->discussion_id);
    }
}