<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable =[
        'country_name'
    ];

    //one to one
    public function capital()
    {
        return $this->hasOne(Capital::class);
    }

    //one to many
    public function city()
    {
        return $this->hasMany(city::class);
    }
}
