<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;

class UserController extends Controller
{
    public function updateUserDetails(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->location = $request->location;
        $user->phone_number = $request->phone_number;
        $user->farming_type = $request->farming_type;
        $user->save();

        return redirect()->route('profile');
        
    }
}
