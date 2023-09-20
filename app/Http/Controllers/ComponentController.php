<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ComponentController extends Controller
{
    public function welcome()
    {
        $users = User::select('name', 'email', 'phone')->latest()->get()->toArray();
        return view('welcome', compact('users'));
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->email
        ]);
        return back();
    }
}
