<?php

namespace App\Http\Controllers;

use App\Cahiertext;
use App\devoirs;
use App\Enseignant;
use App\Enseignement;
use App\Mail\DevoirMail;
use App\Option;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class devoirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //     $user_email = Auth::user()->email;
    //     $enseignant = DB::table('enseignants')->select('id')->where('email' , $user_email)->first();
    //      foreach ($enseignant as $key => $value) {
    //          $enseignant_id = $value ;
    //      }
    //  //    dd($enseignant_id) ;
    //     $enseignements = Enseignement::select('*')->where('enseignant_id' , $enseignant_id)->get();
    //  //    dd($enseignements) ;
    //     return view('Enseignant.devoir', compact('enseignements'));
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
    //     $user_email = Auth::user()->email;
    //     $name = Auth::user()->name ;
    //     $enseignant = DB::table('enseignants')->select('id')->where('email' , $user_email)->first();
    //      foreach ($enseignant as $key => $value) {
    //          $enseignant_id = $value ;
    //      }
        
    //    $file = $request->file('file');
    //    $fileName = $file->getClientOriginalName();
       
    //    $path = storage_path('cours');
    //    $file->move($path , $fileName);
    //    $date = $request->date ;
    //    $cour = devoirs::create([
    //         'name' => $request->name,
    //         'cour' => $fileName ,
    //         'date_limite' => $date,
    //         'enseignants_id' => $enseignant_id
    //    ]);
    //    $id = $cour->id ;
    //    $etudiants = User::select('*')->where('option_id' , $request->option)->get()->toArray();
         
    //    foreach ($etudiants as $key => $etudiant) {
    //        $email = $etudiant['email'] ;
    //        Mail::to($email)->send(new DevoirMail($etudiant, $id , $date , $name));
           
    //    }

    //    toast('le cours '.$cour->cour.' à bien été publié','success');
    //    return view('Enseignant.Couroption');

    $enseignant = Auth::user() ;  
    $informations = Cahiertext::select('*')->where([
        'enseignant' => $enseignant->name ,
        'enseignement' => $request->enseignement  
    ])->get() ;
     return view('cahiertexte.ViewCahier' , compact('informations')) ;
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
        $ident = $id ;
        $user = Auth::user() ;
        $enseignements = [] ;
        $enseignants = [] ;
        $tt = 'TIC 1' ;
        $optionuser = Option::select('*')->where('name' , $tt)->first() ;
        // dd($optionuser);
        $enseignement = $optionuser->enseignements ;
        foreach ($enseignement as $key => $value) {
            $enseignements [] = $value ;
            $verify = Enseignant::where('id' , $value->enseignant_id)->first() ;
            $enseignants [] = $verify;
        }
        // dd($enseignants);
        // $enseignements = Enseignement::all() ;
        $options = Option::all() ;
       

        $information = Cahiertext::select('*')->where('id' , $ident)->get()->toArray() ;
        // dd($information) ;
        return view('cahiertexte.edit' , compact('information' ,'enseignants', 'enseignements' , 'options')) ;
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
        $cahiertext = Cahiertext::select('*')->where('id' , $id)->first();
        $cahiertext->update($request->all());
        toast(trans('Information modifié'), 'success');
        return redirect()->route('CahierTexte.create') ;
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
