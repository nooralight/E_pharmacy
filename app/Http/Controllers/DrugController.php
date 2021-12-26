<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

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
        $drug->update(["name"=>$request->name, "brand"=>$request->brand, "mg"=>$request->mg,"quantity"=>$request->quantity, "status"=>$request->status]);
        //dd($requ, $post->all());
        //sleep(2);
        return redirect()->route("homeTodrug");
        //return view("post.index");
    }

    public function deleteDrug(Drug $drug){
        $drug->delete();
        return redirect()->route("homeTodrug");
    }

    //Buy Drug
    public function buyDrug(Drug $drug){
        return view("drugs.payment", compact("drug"));
    }


}
