<?php

namespace App\Http\Controllers;

use App\Models\PwdUser;
use App\Http\Requests\StorePwdUserRequest;
use App\Http\Requests\UpdatePwdUserRequest;

class PwdUserController extends Controller
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
    public function store(StorePwdUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PwdUser $pwdUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PwdUser $pwdUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePwdUserRequest $request, PwdUser $pwdUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PwdUser $pwdUser)
    {
        //
    }
}
