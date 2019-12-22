@extends('front.master')
@section('title','Cart Page')
@section('content')
    <style>
        body{
            background: #F6F6F6;
        }
    </style>
    <script>
        $(document).ready(function(){
            <?php for($i=1;$i<20;$i++){?>
            $('#upCart<?php echo $i;?>').on('change keyup', function(){
                var newqty = $('#upCart<?php echo $i;?>').val();
                var rowId = $('#rowId<?php echo $i;?>').val();
                var proId = $('#proId<?php echo $i;?>').val();
                if(newqty <=0){ alert('enter only valid qty') }
                else {
                    $.ajax({
                        type: 'get',
                        dataType: 'html',
                        url: '<?php echo url('/cart/update');?>/'+proId,
                        data: "qty=" + newqty + "& rowId=" + rowId + "& proId=" + proId,
                        success: function (response) {
                            console.log(response);
                            $('#updateDiv').html(response);
                        }
                    });
                }
            });
            <?php } ?>
        });
    </script>
    <?php if ($cartItems->isEmpty()) { ?>
    <br>
    <br>
    <br>
    <section id="cart_items">
        <div class="container">
            <div align="center"> <br><br> <img src="{{asset('dist/images/empty-cart.png')}}"/>
                <script>
                    alert('You have no products in your cart....!');
                </script>
                <h3 ><br><b>You have no products in your cart....!</b></h3><br><br><br><br>
            </div>
        </div>
    </section> <!--/#cart_items-->
    <?php } else { ?>
    <br>
    <br>
    <section id="cart_items">

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}"></a></li>
                    <li class="active" style="margin-left:580px;"><b><h4>Shopping Cart</h4></b></li>
                </ol>
            </div>
            <div id="updateDiv">

                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image"><b>Image</b></td>
                            <td class="description"><b>Product</b></td>
                            <td class="price"><b>Price</b></td>
                            <td class="quantity"><b>Quantity</b></td>
                            <td class="total"><b>Total</b></td>
                            <td></td>
                        </tr>
                        @if(session('status'))
                            <div class="alert alert-success">
                               <b> {{session('status')}}</b>
                            </div>
                        @endif
                        @if(session('error'))

                            <div class="alert alert-danger">
                               <b> {{session('error')}}</b>
                            </div>
                        @endif
                        </thead>
                        <?php $count =1;?>
                        @foreach($cartItems as $cartItem)
                            <tbody>
                            <tr>
                                <td class="cart_product">
                                    <p><img src="{{url('images',$cartItem->options->img)}}" class="img-responsive" width="250"></p>
                                </td>
                                <td class="cart_description">
                                <!--<a href="{{url('/product_detail')}}/{{$cartItem->id}}">heang</a>
                                            <br>-->
                                    <!--</div>-->
                                    <h4><a href="{{url('/product_detail')}}/{{$cartItem->id}}" style="color:blue;text-decoration: none;">{{$cartItem->name}}</a></h4>

                                    <p>Only {{$cartItem->options->stock}} left</p>
                                </td>
                                <td class="cart_price">
                                    <p>Rs.{{$cartItem->price}}</p>
                                </td>
                                <td class="cart_quantity">

                                        <form action="{{url('cart/update',$cartItem->rowId)}}" method="post" role="form">

                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="hidden" name="proId" value="{{$cartItem->id}}"/>
                                            <input type="number" size="2" value="{{$cartItem->qty}}" name="qty" id="upCart<?php echo $count;?>"
                                                   autocomplete="off" style="text-align:center; max-width:50px; "  MIN="1" MAX="1000">
                                            <input type="submit" class="btn btn-primary"  value="Update" styel="margin:5px">
                                        </form>
                                    <!--</div>-->
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
            </div>
        </div>
    </section> <!--/#cart_items-->
    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="chose_area">
                        <?php /*      <ul class="user_option">
                            <li>
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="text" id="couponCode">
                            </li>
                            <li>
                                <button id="couponBtn">Apply</button>
                            </li>
                        </ul>
                        */?>
                        <ul class="user_info">
                            <li class="single_field">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            </li>
                            <li class="single_field">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Karnataka</option>
                                    <option>Kerala</option>
                                    <option>Delhi</option>
                                    <option>Tamil Nadu</option>
                                    <option>Andra Pradesh</option>
                                    <option>Madhya Pradesh</option>
                                    <option>Orrisa</option>


                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>

                                </select>
                            </li>
                            <li class="single_field zip-field">
                                <label>Zip Code:</label>
                                <input type="text">
                            </li>
                        </ul>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Cart Sub Total <span>Rs.{{Cart::subtotal()}}</span></li>
                            <li>Eco Tax <span>Rs.{{Cart::tax()}}</span></li>
                            <li>Shipping Cost <span>Free</span></li>
                            <li>Total <span>Rs.{{Cart::total()}}</span></li>
                        </ul>
                        <a class="btn btn-default update" href="">Update</a>
                        <a class="btn btn-default check_out" href="{{url('/')}}/checkout">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
    <?php } ?>
@endsection
