<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getOrder()
    {
        return $this->hasManyThrough(order::class,Product::class,'category_id','product_id','id','id');
    }


}
