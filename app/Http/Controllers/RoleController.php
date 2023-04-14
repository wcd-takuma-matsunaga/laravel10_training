<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function attach(Request $request, User $user)
    {
        $roles = request()->input('role');
        $user->roles()->attach($roles);
        return back();
    }

    public function detach(Request $request, User $user)
    {
        $roles = request()->input('role');
        $user->roles()->detach($roles);
        return back();
    }
}
