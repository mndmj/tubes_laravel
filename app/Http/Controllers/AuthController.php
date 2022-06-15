<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        session_start();
    }


    public function login()
    {
        $data = [
            "title" => "Login"
        ];
        if (isset($_SESSION['notif'])) {
            $data['notif'] = true;
            unset($_SESSION['notif']);
        }
        return view('login', $data);
    }

    public function register()
    {
        return view('register', ["title" => "Register"]);
    }

    public function simpanUser(Request $request)
    {
        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/register');
    }

    public function cekLogin(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect('/admin');
        } else {
            $_SESSION['notif'] = true;
            return redirect('/login');
        };
    }
}
