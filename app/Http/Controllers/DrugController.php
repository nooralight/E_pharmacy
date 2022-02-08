<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\User;
use App\Models\Cart;

class DrugController extends Controller
{
    //

    public function gotoAddDrug(){
        return view("drugs.add_drug");
    }

    public function add_Drug(Request $request){
        //return view("drugs.drug_list");
        //Drug::create($request->all());
        $drug = new Drug;
        $drug->name = $request->name;
        $drug->brand = $request->brand;
        $drug->mg = $request->mg;
        $drug->quantity = $request->quantity;
        $drug->catagory = $request->catagory;
        $drug->scientific = $request->scientific;
        $drug->price = $request->price;

        //$drug->image = $request->image;

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = $request->name.'.'.$request->image->extension();
        $drug->image = $imageName;
        $drug->save();
        $request->image->move(public_path('images'), $imageName);

        return redirect()->route("homeTodrug");
    }

    public function gotoUpdate_drug(Drug $drug){
        //$post = Post::find($id);
        return view("drugs.update_drug",compact("drug"));
    }

    public function updateDrug(Request $request, Drug $drug){
        $drug->update(["name"=>$request->name, "brand"=>$request->brand, "mg"=>$request->mg,"quantity"=>$request->quantity, "status"=>$request->status, "price"=>$request->price,"catagory"=>$request->catagory,"scientific"=>$request->scientific]);
        //dd($requ, $post->all());
        //sleep(2);
        return redirect()->route("homeTodrug");
        //return view("post.index");
    }

    public function deleteDrug(Drug $drug){
        $drug->delete();
        return redirect()->route("homeTodrug");
    }
    public function searchAll(Request $request){
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $drugs = Drug::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('brand', 'LIKE', "%{$search}%")
            ->orWhere('scientific', 'LIKE', "%{$search}%")
            ->get();
            $user= User::find($request->session()->get('user_id'));
            if($user->roles()->where("name", "ROLE_ADMIN")->first()){
                return view("drugs.drug_list1", compact('drugs'));
            }
            return view("drugs.drug_list2", compact('drugs'));
    }

    //Buy Drug
    public function buyDrug(Drug $drug, Request $request){
        $drug_id= $drug->id;
        $price = $drug->price;
        $drug_name = $drug->name;
        $user_id= $request->session()->get("user_id");
        $cart = Cart::all();
        $check_user = Cart::where('user_id','=',$user_id)->get();
        $check= $check_user->where('drug_id','=',$drug_id)->first();

        if($check== null){
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->drug_id = $drug_id;
            $cart->product_name = $drug_name;
            $cart->product_price = $price;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }

    }


}
