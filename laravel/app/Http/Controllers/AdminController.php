<?php


namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        if (!\session()->has('admin')) {
            return redirect()->route('admin.login');
        }
        return view('admin.dashboard', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function store(AdminRequest $request)
    {

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login_form(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.login');
    }

    public function login(AdminRequest $request)
    {
        $admin = Admin::where('email', $request->input("email"))->first();

        if (!$admin || !Hash::check($request->input('password'), $admin->password)) {

            return redirect()->route('admin.login');
        }
        \session()->put('admin', $admin->id);
        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        \session()->flush();
        return redirect()->route('admin.login');
    }
}
