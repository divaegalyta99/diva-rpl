<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function loginauth (Request $request) {
    //     if (Auth::attempt($request->only('email','password'))){
    //         return redirect('admin.Dashboard');
    //     }
    //     return redirect ('login');
    // }
    public function index(){
        return view ('admin.login');
    }

 
    public function authenticate(Request $request){
        $credentials = $request->validate ([
            'email' => ['required' , 'email'],
            'password' => ['required'],
        ]);

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('MasterSiswa.index');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
        $message =[
            'required' => ':attribute harus diisi dulu',
        ];
        $this->validate($request,[
            'email' => 'required' ,
            'password' => 'required',
        ],$message);
    }

  
}
