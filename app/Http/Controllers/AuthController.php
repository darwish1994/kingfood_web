<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function loginIndex()
    {
        if (Auth::user() != null)
            return redirect('/');

        return view('auth.login');
    }

    public function login(Request $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            switch (Auth::user()->role_id) {

                case 1:
                    return redirect('/admin')->with('success', "Login successfully");
                    break;

                case 2:
                    return redirect('/')->with('success', "Login successfully");
                    break;
                case 3:
                    return redirect('/supplier')->with('success', "Login successfully");
                    break;

            }

            return redirect('/')->with('success', "Login successfully");
        } else {
            dd("jjlk");
            return redirect()->back()->with('error', "Email or password is wrong");

        }

    }


    public function register(Request $request)
    {

        $this->validate($request, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'address' => 'required',
            'password' => 'required',

        ]);


        $user = new User();

        $user->name = $request->f_name . " " . $request->l_name;

        $user->email = $request->email;

        $user->phone = $request->phone;

        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        $user->role_id = 2;

        $user->save();

        return redirect('login')->with('success', "register successfully");


    }

    public function registerIndex()
    {

        if (Auth::user() != null)
            return redirect('/');

        return view('auth.register');


    }

    public function logout()
    {

        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');

    }


}
