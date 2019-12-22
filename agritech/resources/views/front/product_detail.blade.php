
@extends('front.master')
@section('title','Detail Page')
@section('content')
    <style>

        .btn:hover{

            background-color: #E9611E;
        }
    </style>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-6 col-xs-12">



                    <div class="thumbnail"><br><br><br><br><br><br>
                        <img src="{{url('images',$product->image)}}" class="card-img" style="width: 400px;">
                    </div>

                </div>
                <div class="col-md-5 col-md-offset-1"><br><br><br>
                    <h2><?php echo ucwords($product->pro_name); ?></h2>
                    <h5 style="text-align: justify"><b>Description :</b> {{$product->pro_info}}</h5>
                    <h2 class="text-danger">Rs. {{$product->spl_price}}</h2>
                    <p><b>Available : {{$product->stock}} In Stock</b></p>
                    <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-shopping-cart "></i> Add To Cart</a>

                    <?php
                    $wishlistData=DB::table('wishlist')->rightJoin('products','wishlist.pro_id','=','products.id')
                        ->where('wishlist.pro_id','=',$product->id)->get();
                    $count=App\Wishlist_model::where(['pro_id'=>$product->id])->count();
                    if($count=="0"){
                    ?>
                    <form action="{{route('addToWishList')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" value="{{$product->id}}" name="pro_id">
                        <br><button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-heart "></i> Add to Wishlist</button>
                    </form>
                    <?php }else{?>
                    <h3 style="color:green"> Added to  <a href="{{url('/WishList')}}" style="text-decoration: none; color: red;">  Favourites</a></h3>
                    <?php }?>

                </div>

            @endforeach


        </div>
    </div>
@endsection