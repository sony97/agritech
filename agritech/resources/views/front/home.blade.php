@extends('front.master')

@section('content')

<style>
    .col-md-4:hover{
        transform:scale(1.1) ;

        z-index:2;

    }
</style>



    <main role="main">


        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL::asset('dist/images/agrim1.jpg')}}" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('dist/images/agrim2.jpg')}}" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('dist/images/agrim3.jpg')}}" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('dist/images/agrim4.jpg')}}" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL::asset('dist/images/agrim5.jpg')}}" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">

                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>





        <div class="album py-5 bg-light " >
            <div class="container" >
                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4" >

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
                        <h3><b>No Products</b></h3>
                    @endforelse

                </div>
            </div>
        </div>

    </main>

@endsection
