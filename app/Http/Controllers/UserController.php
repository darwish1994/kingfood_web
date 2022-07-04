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
            "phone" => "required|unique:users",
            "address" => "required",
            "password" => "required",

        ]);

        if ($validated->fails()) {

            $data["message"] = $validated->errors();

            return response()->json($data, 400);
        }


        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->save();

        $data["data"] = $user;
        $data["message"] = "user is registered";
        return response()->json($data, 200);


    }

    public function resetPassword(Request $request)
    {


    }


}
