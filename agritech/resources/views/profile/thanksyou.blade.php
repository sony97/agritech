
@extends('front.master')
@section('title','Order Conformation Page')
@section('content')
    <style>
        table td { padding:10px
        }

         body{
             background: #FFFFFF;
         }

    </style>
    <br>
    <br>

    <section id="cart_items">
        <div class="container">
            <div class="text-center">
                <script>
                    alert('Thank you for your order');
                </script>
                <div align="center"> <br><br> <img src="{{asset('dist/images/order3.png')}}"/><br>
                <h3>Thanks for your order :
                    <span style='color:green'>{{ucwords(Auth::user()->name)}}</span></h3><br>
                    <h3>Your order has been placed successfully</h3>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
@endsection