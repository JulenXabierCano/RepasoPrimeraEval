<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function updatePoints()
    {
        DB::table('users')->where('id', Auth::user()->id)->update(['points' => Auth::user()->points + 1]);
        return redirect('/play');
    }
}
