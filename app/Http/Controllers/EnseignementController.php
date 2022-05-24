<?php

namespace App\Http\Controllers;

use App\Enseignant;
use App\Enseignement;
use App\Mail\enseignantCreate;
use App\Option;
use App\Periode;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnseignementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::all() ;
        $enseignements = Enseignement::all();
        $enseignementss = Enseignement::all()->toArray();
        return view('Enseignements.liste', compact('options','enseignements', 'enseignementss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enseignement_id = [] ;
        $id = Enseignement::select('id')->get()->toArray();
        // dd($id) ;
        foreach ($id as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $enseignement_id [] = $value ;
            }
        };
        // dd($enseignement_id);
        $enseignants = Enseignant::whereNotIn('id' , $enseignement_id)->get();
        $enseignantss = Enseignant::whereNotIn('id' , $enseignement_id)->get()->toArray() ;

        if (empty($enseignantss)) {
            toast("Veillez d'abord crée un ou plusieurs enseignants n'ayant pas d'enseignement.",'error');
            return redirect()->route('enseignant.create');
        } else {
        $options = Option::all();
        return view('Enseignements.add', compact('options','enseignants'));
        }
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $names = $request->name;
        $credits = $request->credit;
        $option_id = $request->option_id;
        $enseignement_id = $request->enseignant_id ;
        // dd($request->enseignant_id) ;
        foreach ($names as $key1 => $name) {
            foreach ($option_id as $key2 => $id) {
               foreach ($credits as $key3 => $credit) {
                foreach ($enseignement_id as $key4 => $enseignement) {
                    if ($key1 == $key2 && $key1==$key3 && $key1 == $key4) {
                        DB::table('enseignements')->insert([
                            'option_id' => $id,
                            'enseignant_id' => $enseignement,
                            'name' => $name,
                            'credit' => $credit
                        ]);
                        
                       }
                }
               }
            }
        }
        toast('Enseignement a été ajouté avec success`.','success');
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
      
        $enseignement = Enseignement::select('*')->where('id' , $id);
        
        $enseignement_periode = DB::table('periodes')->select('id')->where('Enseignement_id',$id)->first();
        
        if (!empty($enseignement_periode)) {
            $enseignement_period = DB::table('periodes')->where('Enseignement_id',$id);
        // dd($enseignement_period);
            $periode = DB::table('jour_periode')->where('periode_id',$enseignement_periode->id);
            $periode->delete();
            $enseignement_period->delete();
            $enseignement->delete();
        }else {
            $enseignement->delete();
        }
        toast('Enseignement a bien été supprimé !','error');
        return back();
    }
}
