<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function admin(){
        $users= User::all();
        $drugs= Drug::all();

        return view("admin.admin")->with(["users"=>$users,"drugs"=>$drugs]);
    }
}
