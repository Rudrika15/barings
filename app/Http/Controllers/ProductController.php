<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('Product.product');
  }
    public function product1(){
        return view('Product.Resin');
  }
    public function product2(){
        return view('Product.Hybrid');
  }
    public function product3(){
        return view('Product.Vitrified');
  }


}
