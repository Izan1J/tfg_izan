<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function asignar(){
        $user = User::latest()->first();
        $role = Role::findById('2');
        $user->assignRole($role);

        // return view('/home');
        return redirect()->route('home');
    }
}
