<?php

namespace App\Http\Controllers;

use App\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HostController extends Controller
{
    public function Login(Request $request)
    {
        $email = $request->input('email');
        $host = Host::where('email', $email)->first();
        $pass = $request->input('password');
        if (password_verify($pass, $host->password)) {
            session()->put('logged', true);
            session()->put('id', $host->id);
            echo "connected";
            return redirect("/");
        } else {
            dd("joli");
        }
    }

    public function LogOut(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }

    public function UpdateHost(Request $request)
    {
        echo "update";
        $host = Host::where('id', session('id'));
        $host->update($request->except('_token'));
        return redirect("/profile");
    }

    public function SignUp(Request $request)
    {
        $request->all();
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $validHost = $request->all();
        $validHost['password'] = Hash::make($validHost['password']);
        $host = Host::create($validHost);
        return redirect("/login");
    }
}
