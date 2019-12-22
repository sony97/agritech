<?php

namespace App\Http\Controllers;

use App\Address_model;
use App\Order_model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $cartItems = Cart::content();
            return view('cart.checkout', compact('cartItems'));
        } else {
            return redirect('login');

        }
    }

    public function address(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|min:3|max:20',
            'pincode' => 'required|numeric',
            'city' => 'required|min:5|max:25',
            'state' => 'required|min:5|max:35',
            'country' => 'required'
        ]);
        $request['user_id'] = Auth::user()->id;
        Address_model::create($request->all());
        Order_model::createOrder();
        Cart::destroy();
        return view('profile.thanksyou');
    }
}