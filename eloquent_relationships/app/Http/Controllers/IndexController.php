<?php

namespace App\Http\Controllers;

use App\Http\Traits\ResponseTraits;
use App\Models\Capital;
use App\Models\Country;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ResponseTraits;
//--------------------------------//One To One Relationship Methods//--------------------------------//
    //get Data base on Country Id
    public function getCountryData($id)
    {
        $data = Country::find($id)->capital;
        return $this->sendSuccessResponse(200,"get Data base on Country Id",$data);
    }
    //get Data base on Capital Id

    public function getCapitalData($id)
    {
        $data = Capital::find($id)->country;
        return $this->sendSuccessResponse(200,"get Data base on Capital Id",$data);
    }

    public function getBothData($id)
    {
        $data = Capital::with('country')->find($id);
        return $this->sendSuccessResponse(200,"get Data base on Capital Id",$data);
    }


}
