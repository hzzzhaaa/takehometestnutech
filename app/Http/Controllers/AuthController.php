<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //login
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('produk');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();


        return redirect('/');
    }

    public function register ()
    {
        return view('register');
    }

    public function _register(Request $request)
    {
        $uname = $request->username;
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;

        $u = User::create([
            'name'=>$nama,
            'username'=>$uname,
            'email'=>$email,
            'password'=>bcrypt($password),
        ]);
        return redirect("/");

    }
}
