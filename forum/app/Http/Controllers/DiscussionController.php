<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\Category;
use App\Models\User;
use App\Models\Role;

class DiscussionController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'required|image',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('picture')) {
            $filename = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('images'), $filename);
        } else {
            $filename = null;
        }

        Discussion::create([
            'title' => $request->title,
            'picture' => $filename,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Discussion successfully created! It needs to be approved before you dig into it though! :)');
    }

    public function approve()
    {
        $discussions = Discussion::where('is_approved', false)->get();
        return view('approve_discussions', compact('discussions'));
    }
    public function edit(Discussion $discussion)
    {
        if (auth()->id() !== $discussion->user_id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $categories = Category::all();
        return view('edit', compact('discussion', 'categories'));
    }

    public function update(Request $request, Discussion $discussion)
    {
        if (auth()->id() !== $discussion->user_id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title' => 'required',
            'picture' => 'image',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('picture')) {
            $filename = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('images'), $filename);
        } else {
            $filename = $discussion->picture;
        }

        $discussion->update([
            'title' => $request->title,
            'picture' => $filename,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Discussion updated successfully');
    }




    public function destroy(Discussion $discussion)
    {
        if (auth()->id() !== $discussion->user_id && !auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        // dd(auth()->user(), auth()->user()->isAdmin()); // Debugging line

        $discussion->delete();

        return redirect()->route('dashboard')->with('success', 'Discussion deleted successfully.');
    }


    public function approveDiscussion(Discussion $discussion)
    {
        $discussion->is_approved = true;
        $discussion->save();
        return redirect()->route('dashboard')->with('success', 'Discussion approved successfully');
    }


    public function showDashboard()
    {
        $discussions = Discussion::where('is_approved', true)->get();
        return view('dashboard', compact('discussions'));
    }

    public function show($discussionId)
    {
        $discussion = Discussion::with('comments')->findOrFail($discussionId);
        return view('show', compact('discussion'));
    }



}
