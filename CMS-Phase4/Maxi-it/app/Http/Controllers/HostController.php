<?php

namespace App\Http\Controllers;

use App\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HostController extends Controller
{
    public function Login(Request $request){
        $email = $request->input('email');
        $host = Host::where('email', $email)->first();
        $pass = $request->input('password');
        if($host->password === $pass){
            session()->put('logged',true);
            session()->put('id',$host->id);
            echo "connected";
            var_dump("id : " . session('id'));
            return redirect("/");
        } else {
            return 'Looser';
        }
    }

    public function LogOut(Request $request){
        $request->session()->flush();
    }

    public function Update(Request $request){
        echo "update";
        $host = Host::where('id', session('id'));
        $host->update($request->except('_token'));
    }

    public function SignUp(){
        $userFormData = input::all();
        /*$rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validation = Validator::make($userFormData,$rules);
        if($validation->fails()){
            return 'error';
        }*/
        $host = Host::create($userFormData);
    }
}
