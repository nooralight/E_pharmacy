<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Drug;
Use \Carbon\Carbon;

class CartController extends Controller
{
    //
    public function gotoCart(Request $request){
        $user_id= $request->session()->get("user_id");
        $carts= Cart::where("user_id","=",$user_id)->get();
        return view("cart.cart_page")->with(["carts"=>$carts]);
    }
    public function gotoPayment(){

        return view("drugs.payment");
    }
    public function confirm_payment(Request $request){
        // $user_id= $request->session()->get("user_id");
        // $carts= Cart::where("user_id","=",$user_id);
        // $request->validate([

        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);


        // $imageName = $request->user_id.'.'.$request->image->extension();
        // $carts->prescription = $imageName;
        // $request->image->move(public_path('images'), $imageName);
        // //$cartsF = Cart::where("user_id","=",$user_id)->get();
        // dd($carts);
        return view("drugs.payment");

    }
    public function deleteCart(Cart $cart){
        $cart->delete();
        return redirect()->route("gotoCart");
    }
}
