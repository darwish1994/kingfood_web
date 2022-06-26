<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        if (empty($request->email) || empty($request->password)) {

            $data["message"] = "email or password wrong";

            return response()->json($data, 401);
        }

        $user = User::where('email', $request->email)->first();
        if (empty($user)) {
            $data["message"] = "email or password wrong";
            return response()->json($data, 401);

        }

        if (Hash::check($request->password, $user->password)) {

            $data["data"] = $user;
            $data["message"] = "login success";
            return response()->json($data, 200);

        } else {
            $data["message"] = "email or password wrong";
            return response()->json($data, 401);

        }


    }

    public function register(Request $request)
    {


        $validated = $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "phone" => "required",
            "address" => "required",
            "password" => "required",

        ]);




    }

    public function resetPassword(Request $request)
    {


    }


}
