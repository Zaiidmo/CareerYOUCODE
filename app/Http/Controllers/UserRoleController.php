<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeuser_roleRequest;
use App\Http\Requests\Updateuser_roleRequest;
use App\Models\user_role;

class UserRoleController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeuser_roleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(user_role $user_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user_role $user_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateuser_roleRequest $request, user_role $user_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user_role $user_role)
    {
        //
    }
}
