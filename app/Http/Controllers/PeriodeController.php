<?php

namespace App\Http\Controllers;

use App\Jour;
use App\Periode;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $heure_dep = $request->heure_dep;
        $heure_fin = $request->heure_fin;
        $enseignement = $request->enseignement;
        $jour = $request->jour ;
        // $jour_id = Jour::select('id')->where('jour' , $jour)->first();
        // dd($jour) ;
        $periode = Periode::create([
            'Enseignement_id' => $enseignement,
            'heure_dep' => $heure_dep,
            'heure_fin' => $heure_fin
        ]);
       
        // dd($periode->id);
        $periode = DB::table('jour_periode')->insert([
            'jour_id' => $jour,
            'periode_id' => $periode->id
        ]);
        toast('la periode a été ajouté avec success`.','success');
        return redirect()->route('Enseignements.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
