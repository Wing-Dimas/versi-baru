<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegistrationController extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request){
        request()->validate([
            "username" => ["required","unique:user,username" ,"string", "min:3"],
            "password" => ["required", "min:8"],
            "confirm-password" => ["min:8", "same:password"]
        ]);

        User::create([
            "username"=>$request->username,
            "password"  => Hash::make($request->password)
        ]);

        return redirect("/katalog");
    }
}
