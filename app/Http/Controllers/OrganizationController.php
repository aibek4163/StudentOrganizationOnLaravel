<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\RequestOrganization;

class OrganizationController extends Controller
{
    function getAllOrganization(){
        //$orgs = Organization::all();
        $orgs=DB::select('SELECT * FROM organizations');


        $user = session('user');
        $u_id = $user['id'];
        //$user_orgs = User::find($user_id);

        $user_orgs = DB::table('organizations')->where('user_id',$u_id)->get();
        //echo $user_orgs;
        return view('organizations',compact('orgs','user_orgs'));
    }

    function getAllRequest(){
        $user = session('user');
        $u_id = $user['id'];

        $org = DB::table('organizations')->where('user_id',$u_id)->first();
        $org_id =  $org->id;
        //$req = DB::table('request_organizations')->where('user_id',$org_id)->get();
        //$req = DB::table('request_organizations')->select('user_id')->where('organization_id',$org_id)->get();
        $req = RequestOrganization::select('user_id')->where('organization_id',$org_id)->get();
        $req_u = User::find($req);   
        $users = User::where('organization_id',$org_id)->get();
        return view('manage_org',compact('req_u','users'));
    }

    function getUsers(){
        $user = session('user');
        $u_id = $user['id'];
        $org = DB::table('organizations')->where('user_id',$u_id)->first();
        $org_id =  $org->id;
        $users = User::where('organization_id',$org_id)->get();
        return view('manage_org',compact('users'));
    }

    function confirm_requests($user_id){
        $user_2 = User::find($user_id);
        $user = session('user');
        $u_id = $user['id'];
        $org = DB::table('organizations')->where('user_id',$u_id)->first();
        $org_id =  $org->id;
        $user_2 ->organization_id=$org_id;
        $req = RequestOrganization::all();
        $del_id = 0;
        foreach($req as $r){
            if($r->user_id==$user_id && $r->organization_id==$org_id){
                $del_id = $r->id;
            }
        }
        $re=RequestOrganization::find($del_id);
        $re->delete($del_id);
        $user_2->save();
        return redirect('requests'); 
    }

    static function getLeaderById($user_id){
        $org = Organization::where('user_id',$user_id)->first();
        return $org->id;
    }

    static function isInOrg($user_id,$org_id){
        $isInOrg = false;
        $u = User::find($user_id);
        $org = Organization::find($org_id);
        if($u->organization_id!=null && $u->organization_id==$org_id){
            $isInOrg = true;
            return true;
        }
        return false;
    }

    static function isInRequest($user_id,$org_id){
        // echo $user_id;
        // echo $org_id;
        $isInRequest = false;
        $u = User::find($user_id);
        $org = Organization::find($org_id);
        $req = RequestOrganization::all();
        foreach($req as $r){
            if($r->user_id==$user_id && $r->organization_id==$org_id){
                $isInRequest = true;
            }
        }        
        return $isInRequest;
    }

    function delete_user($user_id){
        $user_2 = User::find($user_id);
        $user = session('user');
        $u_id = $user['id'];
        $org = DB::table('organizations')->where('user_id',$u_id)->first();
        $org_id =  $org->id;
        $user_2 ->organization_id=null;
        //$user_2 ->organization_id->delete();
        $user_2->save();
        return redirect('requests'); 
    }

    function reject_user($user_id){
        //$user_2 = User::find($user_id);
        $user = session('user');
        $u_id = $user['id'];
        $org = DB::table('organizations')->where('user_id',$u_id)->first();
        $org_id =  $org->id;
        $req = RequestOrganization::all();
        $del_id = 0;
        foreach($req as $r){
            if($r->user_id==$user_id && $r->organization_id==$org_id){
                $del_id = $r->id;
            }
        }
        $re=RequestOrganization::find($del_id);
        $re->delete($del_id);
        return redirect('requests'); 
    }

    function details($id){
        $org = Organization::find($id)->toArray();
        $user = DB::table('organizations')->join('users','users.id',"=",'organizations.user_id')->get();
        return view('details')->with(compact('org','user'));
    }

    static function checkRequest($org_id,$user_id){
        $isInRequest = false;
        $u = User::find($user_id);
        $org = Organization::find($org_id);
        $req = RequestOrganization::all();
        foreach($req as $r){
            if($r->user_id==$user_id && $r->organization_id==$org_id){
                $isInRequest = true;
            }
        }        
        return $isInRequest;
    }

    function cancel_request($org_id){
        $user = session('user');
        $u_id = $user['id'];
        $req = RequestOrganization::all();
        $del_id = 0;
        foreach($req as $r){
            if($r->user_id==$u_id && $r->organization_id==$org_id){
                $del_id = $r->id;
            }
        }  
        $re=RequestOrganization::find($del_id);
        $re->delete($del_id);
        return redirect("organization/$org_id");
    }
}
