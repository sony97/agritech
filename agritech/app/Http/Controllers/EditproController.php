<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditproController extends Controller
{
    public function editproduct(){
        return view('product.editproduct');
    }
}
