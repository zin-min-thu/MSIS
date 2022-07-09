<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();

        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back()->with('success', 'Comment successfully');
    }
}
