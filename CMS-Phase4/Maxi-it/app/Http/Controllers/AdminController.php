<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Host;
use App\House;
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
        $houseList = House::all();
        $hostList = Host::all();
        return view('admin.dashboard',[
            'refugeeList' => $refugeeList,
            'houseList' => $houseList,
            'hostList' => $hostList]);
    }


    public function LogOut(Request $request)
    {
        $request->session()->flush();
        return redirect("adminLogin");

    }


}
