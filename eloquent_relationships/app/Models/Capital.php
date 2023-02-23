<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    use HasFactory;

    protected $fillable =[
        'capital_name',
        'country_id'
    ];

    //one to one
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    
}
