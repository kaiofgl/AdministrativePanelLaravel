<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\TokenGuard;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{   
    public function dashboard(){
        if(Auth::guard('admin')->check() === true){
            return view('admin.dashboard',['route'=>'null']);
        }

        return redirect()->route('admin.login');
    }

    public function formLogin(){
        if(Auth::guard('admin')->check() === true){
            return view('admin.dashboard',['route'=>'null']);
        }else{
            return view('admin.loginForm');
        }
    }

    public function login(Request $request){
        // var_dump($request->all());
        $rules = array(
            'username' => 'required|min:3|max:100',
            'password' => 'required|min:3|max:100',
        );
        $validator = validator($request->all(), [
            
        ]);

        $validation = Validator::make($request->request->all(),$rules);
        if($validation->fails()){
            return redirect()->back()
                ->withErrors($validation)
                ->withInput();
        }
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
