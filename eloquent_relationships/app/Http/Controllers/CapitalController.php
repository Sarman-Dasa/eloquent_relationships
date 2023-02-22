<?php

namespace App\Http\Controllers;

use App\Http\Traits\ResponseTraits;
use App\Models\Capital;
use Exception;
use Illuminate\Http\Request;

class CapitalController extends Controller
{
    use ResponseTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Capital::all();
        return $this->sendSuccessResponse(200,"Data get Successfully",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try{
        $validation = validator($request->all(),[
            'capital_name'   => 'required|alpha_dash',
            'country_id'     => 'required|numeric'
         ]);
        if($validation->fails())
        {
            return $this->sendErrorResponse($validation);
        }

        Capital::create($request->all());
        return $this->sendSuccessResponse(200,"Data saved Successfully");

       }catch(Exception $th){
            return $this->sendExecptionMessage($th);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
