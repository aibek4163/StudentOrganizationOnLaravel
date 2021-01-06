<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    

    function addAdmin(Request $req){
        $admin = new Admin();
        $admin->logn=$req->login;
        $admin->password=$req->password;
        $admin->save();
        return redirect('admin');
    }

    
}
