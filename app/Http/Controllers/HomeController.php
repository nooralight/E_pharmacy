<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\User;
use App\Models\Employee;

class HomeController extends Controller
{

    //goto home
    public function gotoHome(){
        $drugs= Drug::all();
        if(!session()->has("user_id")){
            return view("home1")->with(["drugs"=>$drugs]);
        }
        return view( "home2")->with(["drugs"=>$drugs]);
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



    public function gotoDrug(Request $request){
        $drugs= Drug::all();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }
    //List with all Drugs
    // public function gotoDrug_All(Request $request){
    //     $drugs= Drug::all();
    //     //dd($posts);
    //     $user= User::find($request->session()->get('user_id'));
    //     if($user->roles()->where("name", "ROLE_ADMIN")->first()){
    //         return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
    //     }
    //     return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    // }

    // List with Tablet
    public function gotoDrug_Tablet(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Tablets')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    // List with Syrup
    public function gotoDrug_Syrup(Request $request){
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Syrups')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    // List with Dental Products
    public function gotoDrug_Dental(Request $request){
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Dental')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    // List with Drops
    public function gotoDrug_Drop(Request $request){
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Drops')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    // List with Inhelar
    public function gotoDrug_Inhelar(Request $request){
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Inhalers')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    // List with Injection
    public function gotoDrug_Injection(Request $request){
        $drugs= Drug::orderBy('name','desc')
            ->where('catagory', 'Injections')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

    public function gotoContact(){
        return view("contact");
    }

    public function gotoDrug_Square(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('brand', 'Square')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }
    public function gotoDrug_Beximco(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('brand', 'Beximco')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }
    public function gotoDrug_Incepta(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('brand', 'Incepta')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }
    public function gotoDrug_Beacon(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('brand', 'Beacon')
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }
    public function gotoDrug_Others(Request $request){
        //$drugs= Drug::all();
        $drugs= Drug::orderBy('name','desc')
            ->where('brand', '!=' , "Square")
            ->where('brand', '!=' , "Beximco")
            ->where('brand', '!=' , "Incepta")
            ->where('brand', '!=' , "Beacon")
            ->get();
        //dd($posts);
        $user= User::find($request->session()->get('user_id'));
        if($user->roles()->where("name", "ROLE_ADMIN")->first()){
            return view("drugs.drug_list1")->with(["drugs"=>$drugs]);
        }
        return view("drugs.drug_list2")->with(["drugs"=>$drugs]);
    }

}
