<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('checkUserRole:staff');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
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
    public function store(StoreUserRequest $request)
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $role = Role::where('name', 'staff')->firstOrFail();
    
        // Sync the user's roles to only the role you fetched
        $user->syncRoles([$role->id]);
        
        return redirect()
            ->route('users.index')
            ->with('success', 'User role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully.');
    }
}
