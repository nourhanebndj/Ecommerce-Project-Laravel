<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Ensure the User model is imported

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function profil(){
        return view('admin.profil');
    }

    public function updateprofile(Request $request){
        /** @var User $user */
        $user = Auth::user(); // Explicitly type-hinting

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->update(); 
        return redirect('/admin/Profil');
    }
}