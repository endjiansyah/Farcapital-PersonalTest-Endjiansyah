<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    function login(Request $request)
    {
        if ($request->method() == 'GET') {
            return view('login');
        }

        $email = $request->input("email");
        $password = $request->input('password');
        // dd($email, admin::query()->where("email", $email)->first());
        $admin = Admin::query()->where("email", $email)->first();

        if ($admin == null) {
            return redirect()->back()->withErrors(['msg' => 'Email salah!!']);
        }
        if (!Hash::check($password, $admin->password)) {
            return redirect()->back()->withErrors(['msg' => 'Password Salah']);
        }

        if (!session()->isStarted()) session()->start();
        session()->put('logged', true);
        session()->put('idUser', $admin->id);
        return redirect()->route('pendonor.list');
    }

    function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
