<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    //-----------------------------------//Show Country Data//-----------------------------------//
    public function index()
    {
        $data = Country::all();
        return view('countryCity.countryData',compact('data'));
    }

    public function show($id)
    {

    }

    //-----------------------------------//Show City Data///-----------------------------------//

    public function showCity()
    {
       //$data = City::all();
        $data = City::with('country')->latest()->paginate(10);
        //return $data;
        return view('countryCity.cityData',compact('data'));
    }

    //-----------------------------------//Show City Data Base On Country id///-----------------------------------//
    public function showCountryCity($id)
    {
        //$data = Country::with('city')->find($id);
        $data = DB::table('countries')
        ->Join('cities','countries.id','=','cities.country_id')
        ->select('*')
        ->where('countries.id','=',$id)
        ->paginate(10);
        //return $data;
        return view('countryCity.cityData',compact('data'));
    }


}
