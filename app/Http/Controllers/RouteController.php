<?php

namespace App\Http\Controllers;
use App\Http\Middleware\MiddlewareAuth;
use Illuminate\Http\Request;
use App\Models\DataModel;

class RouteController extends Controller
{
    public function checkage(){
        return view(view: 'checkage');
    }

    public function dashboard(){
        return view(view: 'dashboard');
    }

    public function login(){
        return view(view: 'login');
    }

    public function register(){
        return view(view: 'register');
    }
    public function welcome(){
        return view(view: 'welcome');
    }

    public function saveData(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $dataRegister = DataModel::create($data);

        return redirect(route('login'));
    }




    

    

}
