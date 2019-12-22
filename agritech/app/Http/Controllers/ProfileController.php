<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function orders(){

        $user_id=Auth::user()->id;
        $orders=DB::table('order_model_products_model')->leftJoin('products','products.id','=','order_model_products_model.products_model_id')->leftJoin('orders','orders.id','=','order_model_products_model.order_model_id')->where('orders.user_id','=',$user_id)->get();
        return view('profile.orders',compact('orders'));
    }

    public function address(){
$user_id=Auth::user()->id;
$address=DB::table('address')->where('user_id',$user_id)->limit(1)->get();
return view('profile.address',compact('address'));
    }


    public function updateAddress(Request $request){
        $this->validate($request,[
            'fullname'=>'required|min:3|max:35',
            'pincode'=>'required|numeric',
            'city'=>'required|min:5|max:25',
            'state'=>'required|min:5|max:25',
            'country'=>'required'
        ]);
        $userid=Auth::user()->id;
        DB::table('address')->where('user_id',$userid)->update($request->except('_token'));
        return back()->with('msg','Your address has been updated');
    }

    public function password(){
        return view('profile.updatePassword');
    }
    public function updatePassword(Request $request){
        $this->validate($request,[
            'newPassword'=>'required|min:4|max:8',

        ]);
        $oldPassword=$request->oldPassword;
        $newPassword=$request->newPassword;
 if(!Hash::check($oldPassword,Auth::user()->password)){
     return back()->with('msg','Please enter the current password');

 }else{
     $request->user()->fill(['password'=>Hash::make($newPassword)])->save();
     return back()->with('msg','Password has been updated');
 }

    }
}
