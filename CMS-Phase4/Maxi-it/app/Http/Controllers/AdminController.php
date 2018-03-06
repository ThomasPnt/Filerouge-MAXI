<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Refugee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Validator;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $pseudo = $request->input('pseudo');
            $admin = Admin::where('pseudo', $pseudo)->first();
            $pass = $request->input('password');
            if (password_verify($pass, $admin->password)) {
                session()->put('isAdmin', true);
                return redirect("dashboard");
            } else {
                return redirect("adminLogin");
            }
        } else if ($request->isMethod('get')) {
            return View::make('admin.index');
        }
    }

    public function dashboard()
    {
        $refugeeList = Refugee::all();
        return view('admin.dashboard',['refugeeList' => $refugeeList]);
    }


    public function removeFromList()
    {
        return "5";
    }

    public function editInfos()
    {
        return "3";
    }


}
