<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
// Spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.admin.users.index');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('backend.admin.users.new_edit', ['user' => $user, 'roles' => $roles, 'action' => 'edit']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        dd('paso');
        $user->roles()->sync($request->roles);

        return redirect()
            ->route('admin.users.edit', $user)
            ->with('info', 'Se asignaron los roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
