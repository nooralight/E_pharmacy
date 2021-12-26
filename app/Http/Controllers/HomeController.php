<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Employee;

class HomeController extends Controller
{

    //goto home
    public function gotoHome(){
        return view( "home");
    }



    public function gotoNameS(){
        return view("drugs.search_Name");
    }
    public function gotoNameB(){
        return view("drugs.search_Brand");
    }

    public function gotoStorage(){
        return view("drugs.storage");
    }

    

    public function gotoDrug(){
        $drugs= Drug::all();
        //dd($posts);
        return view("drugs.drug_list")->with(["drugs"=>$drugs]);
    }

    public function gotoContact(){
        return view("contact");
    }

}
