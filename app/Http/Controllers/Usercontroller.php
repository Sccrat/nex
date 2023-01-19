<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function index(Request $request)
    {
        return User::get()->toArray();
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
