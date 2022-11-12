<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Hash;
Use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view("admin.login");
    }
    public function makeLogin(Request $request){
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role'=> 'admin'

        );
        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return back()->withErrors(['message'=>'Invalid email or password']);
        }
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
