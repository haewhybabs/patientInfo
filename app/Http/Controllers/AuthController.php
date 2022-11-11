<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function  loginRender(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        
        $login = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $response = [
            'message'=>'Invalid login details',
            'alert-type'=>'error'
        ];
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Auth::attempt($login)){
                return redirect('/admin/dashboard');
            }
        }
        return redirect()->back()->with($response);
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
