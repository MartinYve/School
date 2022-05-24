<?php

namespace App\Http\Controllers;

use App\cours;
use App\Enseignant;
use App\Enseignement;
use App\Mail\CourMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class coursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user_email = Auth::user()->email;
       $enseignant = DB::table('enseignants')->select('id')->where('email' , $user_email)->first();
        foreach ($enseignant as $key => $value) {
            $enseignant_id = $value ;
        }
    //    dd($enseignant_id) ;
       $enseignements = Enseignement::select('*')->where('enseignant_id' , $enseignant_id)->get();
    //    dd($enseignements) ;
       return view('Enseignant.cours', compact('enseignements'));
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
        $user_email = Auth::user()->email;
        $name = Auth::user()->name ;
        $enseignant = DB::table('enseignants')->select('id')->where('email' , $user_email)->first();
         foreach ($enseignant as $key => $value) {
             $enseignant_id = $value ;
         }
        
       $file = $request->file('file');
       $fileName = $file->getClientOriginalName();
       
       $path = storage_path('cours');
       $file->move($path , $fileName);
       
       $cour = cours::create([
            'name' => $request->name,
            'cour' => $fileName ,
            'enseignants_id' => $enseignant_id
       ]);
       $id = $cour->id ;
       $etudiants = User::select('*')->where('option_id' , $request->option)->get()->toArray();
         
       foreach ($etudiants as $key => $etudiant) {
           $email = $etudiant['email'] ;
           Mail::to($email)->send(new CourMail($etudiant, $id , $name));
           
       }

       toast('le cours '.$cour->cour.' à bien été publié','success');
       return view('home');
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
        
        $name_cour = DB::table('cours')->select('cour')->where('id' , $id)->first();
        foreach ($name_cour as $key => $value) {
            # code...
        }
        // dd($value) ;
        return response()->file(storage_path('cours/'.$value , $value)) ;
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
