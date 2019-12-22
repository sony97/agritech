
@extends('front.master')
@section('title','Profile Page')
@section('content')
    <style>
        table td { padding:10px;}
    </style>
    <div class="">
        <section id="cart_items">
            <br>
            <div class="row" style="width: 100%;">
                <div class="col-md-4 well well-sm">
                    <div class="card border-secondary mb-3" style="max-width: 18rem; margin-left: 30px;">
                        <div class="card-header" style="text-align: center"><b>Profile Menu</b></div>
                        <div class="card-body text-secondary">
                            @include('profile.menu')
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ol class="breadcrumb">
                        <li><h3>Welcome <span style='color:green'>{{ucwords(Auth::user()->name)}}</span></h3></li>

                    </ol>

                </div>

            </div>
        </section>
    </div>
    <br><br><br><br><br><br><br><br><br>
@endsection