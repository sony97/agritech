
@extends('admin.master')
@section('title','Update Product')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-5 ml-sm-auto col-md-10 pt-3" style=" margin-top:50px;">
                <h3 style="text-align:center;"> Update Your Product</h3>
                <div class="col-md-6">
                    <div class="panel-body">
                        <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
                                <label for="pro_name"><b>Name</b></label>
                                <input type="text" class="form-control" name="pro_name" id="pro_name" required="" placeholder="Product Name">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
                                <label for="pro_code"><b>Code</b></label>
                                <input type="text" class="form-control" name="pro_code" id="pro_code" required="" placeholder="Code">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
                                <label for="pro_price"><b>Price</b></label>
                                <input type="text" class="form-control" name="pro_price" id="pro_price" required="" placeholder="Price">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('stock')?' has-error':''}}">
                                <label for="stock"><b>Stock</b></label>
                                <input type="text" class="form-control" name="stock" id="stock" required="" placeholder="Stock">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
                                <label for="pro_info"><b>Description</b></label>
                                <textarea name="pro_info" id="pro_info" rows="5" required="" class="form-control"></textarea>
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>


                            <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                                <label for="category_id"><b>Category</b></label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">--Select Category--</option>
                                    @foreach($categories as $id=>$category)
                                        <option value="{{$id}}">{{$category}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>






                            <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                <label for="image"><b>Image</b></label><br>
                                <input type="file" name="image" required="">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
                                <label for="spl_price"><b>Sale Price</b></label>
                                <input type="text" class="form-control" name="spl_price" id="spl_price" required="" placeholder="Sale Price">
                                <span class="text-danger">{{$errors->first('')}}</span>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
<?php
