<?php

namespace App\Http\Controllers;

use App\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HostController extends Controller
{
    public function Login(Request $request)
    {
        $email = $request->input('email');
        $host = Host::where('email', $email)->first();
        $pass = $request->input('password');
        if ($host->password === $pass) {
            session()->put('logged', true);
            session()->put('id', $host->id);
            echo "connected";
            return redirect("/");
        } else {
            return 'Looser';
        }
    }

    public function LogOut(Request $request)
    {
        $request->session()->flush();
    }

    public function Update(Request $request)
    {
        echo "update";
        $host = Host::where('id', session('id'));
        $host->update($request->except('_token'));
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
        $host = Host::create($validHost);
    }
}
