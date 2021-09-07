<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\TokenGuard;
class AuthController extends Controller
{   
    public function dashboard(){
        if(Auth::guard('admin')->check() === true){
            return view('admin.dashboard');
        }

        return redirect()->route('admin.login');
    }

    public function formLogin(){
        if(Auth::guard('admin')->check() === true){
            return view('admin.dashboard');
        }else{
            return view('admin.loginForm');
        }
    }

    public function login(Request $request){
        // var_dump($request->all());
        // $validator = validator($request->all(), [
        //     'username' => 'required|min:3|max:100',
        //     'password' => 'required|min:3|max:100',
        // ]);

        // if($validator->fails()){
        //     return redirect('admin/login')
        //             ->withErrors($validator)
        //             ->withInput();
        // };
        
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect('/admin');
        }else{
            return redirect('/admin/login')
                ->withErrors(['errors' => 'Login inválido'])
                ->withInput();
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
