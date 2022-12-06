<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\holder;
use Illuminate\Support\Facades\DB;

class holder_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return holder::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $address_id = DB::table("adreses")->get("id")->last();
        DB::table("holders")->insert(["addrese_id"=>$address_id, "registracijas_nr"=>$request->registracijas_nr, "apliecibas_nr"=>$request->apliecibas_nr]);
        return "Inserted";
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
