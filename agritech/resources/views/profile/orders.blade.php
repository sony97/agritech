
@extends('front.master')
@section('title','Order Page')
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
                    <h3><span style="color: green;">{{ucwords(Auth::user()->name)}}</span>, Your Orders</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Product name</th>
                                <th>Product Code</th>
                                <th>Order Total</th>
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($orders as $order)
                                <tr>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{ucwords($order->pro_name)}}</td>
                                    <td>{{$order->pro_code}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->status}}</td>
                                </tr>
                                @empty
                                    <script>
                                        alert('You have no orders.....!');
                                    </script>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br><br><br><br><br><br><br><br><br>
@endsection

