<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('homepage' ,[
            'title'=>'Products',
            'heading' => 'Coffee',
            'product' => Products::all()
        ] );
    }
    public function homepage(){
        return view('homepage' , [
            'title'=>'Products',
            'heading' => 'Coffee',
            'product' => Products::all() 
        ] );
    }
}
