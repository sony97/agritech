
@extends('front.master')
@section('title','Checkout Page')
@section('content')
    <style>
        body{
            background: #F6F6F6;
        }
    </style>
    <section class="hero hero-page gray-bg padding-small">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 order-2 order-lg-1">
                    <br>
                    <h2>Checkout</h2>
                    <p class="lead text-muted">You currently have {{Cart::count()}} item(s) in your basket</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Checout Forms-->
    <div class="table-responsive cart_info">
        <table class="table table-condensed border-bottom">
            <thead>
            <tr>
                @if(session('status'))
                    <div class="alert alert-success">
                        <b>{{session('status')}}</b>
                    </div>
                @endif
                @if(session('error'))

                    <div class="alert alert-danger">
                        <b> {{session('error')}}</b>
                    </div>
                @endif
            </tr>
            <tr class="cart_menu badge-info">
                <td class="image"><b>Item</b></td>
                <td class="description"><b>Product</b></td>
                <td class="price"><b>Price</b></td>
                <td class="quantity"><b>Quantity</b></td>
                <td class="total"><b>Total</b></td>
                <td></td>
            </tr>
            </thead>
            <?php $count =1;?>
            @foreach($cartItems as $cartItem)
                <tbody>
                <tr>
                    <td class="cart_product">
                        <a href="{{url('/product_details')}}/{{$cartItem->id}}"><img src="{{url('images',$cartItem->options->img)}}" alt="" width="200px"></a>
                    </td>
                    <td class="cart_description">
                        <h4><a href="{{url('/product_details')}}/{{$cartItem->id}}" style="color:blue">{{$cartItem->name}}</a></h4>
                        <p>Product ID: {{$cartItem->id}}</p>
                        <p>Only {{$cartItem->options->stock}} left</p>
                    </td>
                    <td class="cart_price">
                        <p>Rs.{{$cartItem->price}}</p>
                    </td>
                    <td class="cart_quantity">
                        <form action="{{url('cart/update',$cartItem->rowId)}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="proId" value="{{$cartItem->id}}"/>
                            <div class="cart_quantity_button">
                                <input type="hidden" id="rowId<?php echo $count;?>" value="{{$cartItem->rowId}}"/>
                                <input type="hidden" id="proId<?php echo $count;?>" value="{{$cartItem->id}}"/>
                                <input type="number" size="2" value="{{$cartItem->qty}}" name="qty" id="upCart<?php echo $count;?>" autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="30">
                                <input type="submit" class="btn btn-primary" value="Update" styel="margin:5px">
                            </div>
                        </form>
                    </td>
                    <td class="cart_total">
                        <p class="cart_total_price">Rs.{{$cartItem->subtotal}}</p>
                    </td>
                    <td class="cart_delete">
                        <a href="{{url('/cart/remove')}}/{{$cartItem->rowId}}" class="cart_quantity_delete btn btn-sm btn-danger"> <i class="fas fa-times "></i> Remove</a>
                    </td>
                </tr>
                <?php $count++;?>
                </tbody>
            @endforeach
        </table>
    </div>

    <?php  // form start here ?>
    <section class="checkout">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">
                            <form action="{{url('formvalidate')}}" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <h1>Shipping Address</h1>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="firstname" class="form-label">Your Name</label>
                                        <input id="firstname" type="text" name="fullname" placeholder="Your Name"  value="{{ old('firstname') }}" class="form-control">
                                        <br>
                                        <span style="color:red">{{ $errors->first('fullname') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">State Name</label>
                                        <input id="lastname" type="text" name="state" placeholder="State Name" value="{{ old('state') }}" class="form-control">
                                        <br>
                                        <span style="color:red">{{ $errors->first('state') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">Pincode</label>
                                        <input id="lastname" type="text" name="pincode" placeholder="Pincode" value="{{ old('pincode') }}" class="form-control">
                                        <br>
                                        <span style="color:red">{{ $errors->first('pincode') }}</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastname" class="form-label">City Name</label>
                                        <input id="lastname" type="text" name="city" placeholder="City Name" value="{{ old('city') }}" class="form-control">
                                        <br>
                                        <span style="color:red">{{ $errors->first('city') }}</span>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-12">
                                        <select name="country" class="form-control">
                                            <option value="{{ old('country') }}" selected="selected">Select country</option>
                                            <option value="United States">United States</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="UK">UK</option>
                                            <option value="India">India</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Ucrane">Ucrane</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Dubai">Dubai</option>
                                        </select>
                                        <span style="color:red">{{ $errors->first('country') }}</span>
                                    </div>
                                    <span>
                     &nbsp;&nbsp; &nbsp;<input type="radio" name="payment_type" value="COD" checked="checked"> COD

                                    &nbsp;&nbsp;<input type="radio" name="payment_type" value="paypal"> PayPal</span>
                                    <div class="row" style="height: 34px; margin-left: 15px;">
                                        @include('front.paypal')&nbsp;&nbsp;


                                        {{--  @include('front.paypal')&nbsp;&nbsp; --}}
                                        <input type="submit" value="Continue" class="btn btn-primary btn-sm">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="block-body order-summary">
                        <h6 class="text-uppercase">Order Summary</h6>
                        <p>Shipping and additional costs are calculated based on values you have entered</p>
                        <ul class="order-menu list-unstyled">
                            <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>Rs.{{Cart::subtotal()}}</strong></li>
                            <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>Free</strong></li>
                            <li class="d-flex justify-content-between"><span>Tax</span><strong>Rs.{{Cart::tax()}}</strong></li>
                            <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">Rs.{{Cart::total()}}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php  // form start here ?>
@endsection