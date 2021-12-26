<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;

class LoginController extends Controller
{
    //
    public function gotoLogin(){
        return view("login");
    }

    public function checkUser(Request $request){
        $user= User::all();
        $info= $user->where("username", $request->username)->first();
        if($info==null){
            return redirect()->back();
        }
        /*if($user->status!="A"){
            return redirect()->back();
        }*/
        if($request->password != $info->password){
            return redirect()->back();
        }

        //dd($request);
        $request->session()->put("user_id",$info->id);
        return redirect()->route("home");
    }
    public function logOut(Request $request){
        $request->session()->flush();
        return redirect()->route("loginPage");
    }

    public function signUp(Request $request){
        $user= User::create($request->all());
        
        $user->roles()->create([
            "name"=>"USER",
        ]);
        return redirect()->route("loginPage");

    }
}
