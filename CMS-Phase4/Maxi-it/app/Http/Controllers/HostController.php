<?php

namespace App\Http\Controllers;

use App\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HostController extends Controller
{
    public function Login(){
        $loginForm = Request::all();
        if (Auth::attempt(['email' => $loginForm->$email, 'password' => $loginForm->$password])) {
            // Log reussi...
            return "You're logged";
        }
    }

    public function SignUp(){
        $userFormData = Request::all();
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validation = Validator::make($userFormData,$rules);
        if($validation->fails()){
            return 'error';
        }
        $host = Host::create($userFormData);
    }

    public function Update(){

    }
}
