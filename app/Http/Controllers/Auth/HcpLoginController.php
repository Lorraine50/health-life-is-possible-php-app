<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HcpLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest'); // not guest:hcp
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
    
    public function login(Request $request){
        // validate the input fields 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        // authenticate the user 
        $credentials = ['hcp_email' => $request->email, 'password' => $request->password];
        if(Auth::guard('hcp')->attempt($credentials)){
            //return redirect()->intended(route('adminDashboard'));
            return redirect()->route('adminDashboard');
        }
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'Email/Password combination does not match');
    }
    
}