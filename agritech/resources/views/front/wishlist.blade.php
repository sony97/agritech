
@extends('front.master')
@section('title','Wishlist Page')
@section('content')
    <style>
        body{
            background: #F6F6F6;
        }
    </style>
    <div class="container"><br>
        <div class="col-md-12 col-sm-12">
            <h3 style="text-align: center;">Your Favourite Products</h3><br>
            @if(session('msg'))


                <div class="alert alert-success">
                   <b> {{session('msg')}}</b>
                </div>
            @endif
            <div class="row">
                <?php if($products->isEmpty()){ ?>
                    <div align="center" style="margin-left: 35%;"> <br> <img src="{{asset('dist/images/empty-cart.png')}}"/>
                        <script>
                            alert('You have no products....!');
                        </script>
                        <h3 ><br><b>You have no products....!</b></h3><br><br><br><br>
                    </div>
                <?php } else{ ?>
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-3" style="padding-bottom: 20px;">

                        <div class="text-center badge badge-light">
                            <a href="{{url('/product_details',$product->id)}}">
                                <img src="{{url('images',$product->image)}}" alt="" width="200" height="130">
                            </a>
                            <h2>Rs. {{$product->spl_price}}</h2>
                            <p>
                                <a href="{{url('/product_details',$product->id)}}" style="text-decoration: none;">
                                    {{$product->pro_name}}
                                </a>
                            </p>
                            <a href="{{url('/cart/addItem')}}/<?php echo $product->id; ?>" class="btn btn-default add-to-cart">
                                <i class="fa fa-shopping-cart"></i> Add to cart</a>

                            <a href="{{url('/')}}/removeWishList/{{$product->id}}" style="color:red" class="btn btn-default btn-block">
                                <i class="fa fa-minus-square"></i> Remove from wishlist
                            </a>
                        </div>
                    </div>
                @endforeach
                <?php }?>
            </div>
        </div>
    </div>
<br><br><br><br>
@endsection