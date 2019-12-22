@extends('front.master')
@section('title','Category Page')
@section('content')

    <div class="album py-5 bg-light " >
        <div class="container" >
            <?php $cate_name=DB::table('categories')->select('name')->where('id',$id_)->get(); ?>
            <h4>
                Category :
                @foreach($cate_name as $c_name)
                    {{$c_name->name}}
                @endforeach
            </h4>
            <br>
            <div class="row">
                @forelse($category_products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm" >
                            <img class="card-img-top" alt="Card image cap" style="height: 150px;  width:280px;" src="{{url('images',$product->image)}}">
                            <div class="card-body" style="height: 150px;">
                                <span class="name text-muted"> {{$product->pro_name}}</span><br>
                                <del>Rs. {{$product->pro_price}}</del>
                                <span class="price text-muted float-right"><b>RS. {{$product->spl_price}}</b></span>
                                <div class="d-flex justify-content-between align-items-center">

                                    <div class="btn-group">
                                        <a href="{{url('productDetail',$product->id)}}" class="btn btn-sm btn-outline-secondary">View Product</a>
                                        <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary"> <i class="fas fa-shopping-cart "></i> Add To Cart</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <script>
                        alert('Sorry out of stock....!');
                    </script>

                    <h3 ><br><br><br><br><b style="margin-left:470px;">Sorry out of stock....!</b></h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                @endforelse

            </div>
        </div>
    </div>
@endsection
