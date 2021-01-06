<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserAuth extends Controller
{
    function login(Request $request){    
        $user = User::where('email','=',$request->email)->first();
        $data = User::where('email',$request->email)->first();
        $pas = User::Where('password',$request->password)->first();
        $admin = $request->email;
        $admin_pass = $request->password;
        if($admin=="admin@iitu.kz" && $admin_pass=="admin"){
            return redirect('admin'); 
        }
        if($data){
            if($pas){
                session(['user'=>$user]);
                return redirect('profile');  
            }else{
                return redirect('registration'); 
            }
        } 
        else{
            return redirect('registration');
        }                                       
    }
}
