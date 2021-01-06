<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Organization;
use App\Models\RequestOrganization;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function register(Request $req){
        $user = new User;

        $dt = Carbon::parse($req->date);

        $user->name=$req->first_name;
        $user->surname=$req->last_name;
        $user->birthdate=$dt->format('Y-m-d');
        $user->phone_number=$req->phone_number;
        $user->address=$req->address;
        $user->email=$req->email;
        $user->password=$req->password;
        $pass=$req->re_pass;
        $p = $req->password;
        $user->profile_img="data:image/jpeg;base64,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";
        if($pass==$p){
            $user->save();
            return redirect('indexBoots');
        }
        else{
            return ("Passwords are not same!");
        }
    }

    function search(Request $req){
        $name=$req->searched;
        $result=Organization::where("name","like","%".$name."%")->get();
        
        $db =  DB::table('organizations')
        ->join('users','users.id',"=",'organizations.user_id')->get();
        return view("searched",compact('result','db'));
    }

    function filter(Request $req){
        $org_name = $req->org_name;
        $asc = $req->ascending;
        if($asc=='true'){
            $result=Organization::where("name","like","%".$org_name."%")->orderBy('organizations.amount_users','asc')
            ->where("organizations.name","like","%".$org_name."%")->get();
            $db =  DB::table('organizations')
            ->join('users','users.id',"=",'organizations.user_id')->get();
        }else{
            $result=Organization::where("name","like","%".$org_name."%")->orderBy('organizations.amount_users','desc')
            ->where("organizations.name","like","%".$org_name."%")->get();
            $db =  DB::table('organizations')
            ->join('users','users.id',"=",'organizations.user_id')->get();
        }
        
        return view("searched",compact('result','db'));
    }

    function send_request($org_id){
        $user = session()->get('user');
        $org = Organization::find($org_id);

        $req = new RequestOrganization;
        //echo $user['id'];
        $req->user_id=$user->id;
        $req->organization_id = $org_id;
        $id = $org['id'];
        $req->save();
        return redirect("organization/$id");
    }

    function user_organization(){
        $user = session('user');
        $user_id = $user['id'];
        $user_orgs = DB::table('users')->join('organizations','organizations.id',"=",'$user_id')->get();
        return view('organizations',compact('user_orgs'));
    }

    function logout(){
        session()->forget('user');
        return redirect("/");
    }

    function update_profile(Request $req){
        $id = $req->id;
        $name = $req->name;
        $surname = $req->surname;
        $date = $req->date;
        $user = User::find($id);
        $user->name = $name;
        $user->surname = $surname;
        $user->birthdate=$date;        
        $user->save();
        session(['user'=>$user]);
        return redirect("profile");
        //return dd($user);
    }

    function update_picture(Request $req){
        $id = $req->id;
        $picture_url = $req->picture_url;
        $user = User::find($id);
        $user->profile_img = $picture_url;
        $user->save();
        session(['user'=>$user]);
        return redirect("profile");
    }

    function update_password(Request $req){
        $user = User::find($req->id);
        $pas = User::Where('password',$req->old_password)->first();
        if($pas && $req->new_password==$req->re_new_password){
            $user->password=$req->re_new_password;
            $user->save();
            session(['user'=>$user]);
            return redirect("profile");                
        }
    }

    function create_organization(Request $req){
        $user = session('user');
        $user_id = $user['id'];
        $org = new Organization;
        $org->user_id = $user_id;
        $org->name=$req->name;
        $org->description=$req->description;
        $org->amount_users=$req->amount_users;
        $org->role=$req->role;
        $org->logo = $req->logo;
        $org->save();
        return redirect("organizations");
    }
}
