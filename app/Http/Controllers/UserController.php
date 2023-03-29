<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password2' => 'required'
        ]);

        $user = request()->except('password2', '_token');
        $user['password'] = bcrypt($user['password']);
        $password = request()->only('password');
        $password2 = request()->only('password2');

        if (implode($password) <> implode($password2)) {
            return redirect('/registrar');
        }
        else {
            $user = User::insert($user);
            return redirect("/login");
        }    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
