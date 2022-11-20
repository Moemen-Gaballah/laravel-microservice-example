<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }

    public function like(Request $request, $id){
        $response = \Http::get('http://localhost:8000/api/user');

        return $response->json();
    }
}
