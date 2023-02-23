<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasmanythroughController extends Controller
{
    public function show($id)
     {
    //    $data = Product::join('orders','products.id','=','orders.product_id')
    //     ->where('products.id','=',$id)
    //    ->get();
    //    return $data;

       $data = Category::join('products','categories.id','=','products.category_id')
       ->rightJoin('orders','products.id','=','orders.product_id')
       ->where('categories.id','=',$id)
       ->get();
       return $data;
    }
}
