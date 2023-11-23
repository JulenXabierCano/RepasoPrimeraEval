<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $variable = User::find(Auth::user()->id);
        $variable->update([
            'points' => Auth::user()->points + 1,
        ]);
        return redirect('/play');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $variable = User::find(Auth::user()->id);
        User::where('id', Auth::user()->id)->delete();
        return redirect('/play');
    }

    public function createRoot()
    {
        User::create([
            'name' => 'root',
            'email' => 'root@julen.com',
            'password' => '1234',
            'points' => '0'
        ]);
    }
}
