<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class auto_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table("autos")
        ->leftJoin("motors", "autos.id", "=", "motors.id")
        ->leftJoin("holders", "autos.turetaja_id", "=", "holders.id")
        ->leftJoin("models", "autos.modelis_id", "=", "models.id")
        ->leftJoin("markas", "markas.id", "=", "models.mark_id")
        ->leftJoin("adreses", "holders.adrese_id", "=", "adreses.id")
        ->leftJoin("pilsetas", "adreses.pilseta_id", "=", "pilsetas.id")
        ->leftJoin("krasas", "autos.krasa_id", "=", "krasas.id")
        ->leftJoin("types", "autos.tips_id", "=", "types.id")
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = DB::table("adreses")->get("id")->last();

        DB::table("auto")->insert([
        "vin"=>$request->vin, 
        "modelis_id"=>$request->modelis_id, 
        "turetaja_id"=>$last,
        "apstiprinajuma_nr"=>$request->apstiprinajuma_nr,
        "krasa"=>$request->krasa,
        "sedvietas"=>$request->sedvieta,
        "tips_id"=>$request->tips_id,
        "piezimes"=>$request->piezimes]);
        
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
