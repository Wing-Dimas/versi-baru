<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create(){

        return view("auth.login");
    }

    public function store(Request $request){
        $attributes = $request->validate([
            "username" => ["required"],
            "password" => ["required"]
        ]);

        // $user = User::where(["username" => $request->username, "password"=>$request->password])->first();
        // dd($user);
        if(Auth::attempt($attributes)){
            // Auth::login($user);
            return redirect()->intended("katalog");
        }

        // $user = User::where();

        // if($user){
        //     if(Hash::check($request->password, $user->password)){
        //         Auth::login($user);

        //         return redirect("/katalog");
        //     }
        // }


        throw ValidationException::withMessages([
            "username" => "Username and Password not valid",
        ]);
    }
}
