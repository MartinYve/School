<?php

namespace App\Http\Controllers;

use App\Niveau;
use App\Option;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::all() ;
        $new_etudiant = [] ;
        $role = Role::select('*')->where('name' , 'eleve')->get()->toArray();
        // dd($role) ;
        $etudiant_table = DB::table('role_user')->select('user_id')->where('role_id' , $role['0']['id'])->get()->toArray();
        foreach ($etudiant_table as $key1 => $values) {
            foreach ($values as $key2 => $value) {
                $new_etudiant [] = $value ;
            }
        };
        // dd($new_etudiant) ;
        $users = User::whereIn('id' , $new_etudiant)->get();
        return view('users.list', compact('users','options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Option::all();
        $roles = Role::get()->pluck('name', 'name');
        return view('users.add', compact('roles' , 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'last_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       
        $user = User::create($request->all());
        $pass = Hash::make($user->password);
        User::where('id' , $user->id)->update([
            'password' => $pass 
        ]);
       
        // dd('pass');
        
        $roles = $request->input('roles') ? $request->input('roles') : [];   
        $id_role = Role::select('id')->where('name', $roles)->get()->first()->toArray();   
        $id = DB::table('role_user')->latest('id')->first();
        foreach ($id_role as $key => $value) {
            DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [$id->id + 1,$user->id, $value]);
        }
        
        // $user->assignRole($roles);
        toast('Utilisateur à bien été créé.','success');
        return redirect()->route('users.index');
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
        $roles = Role::get()->pluck('name', 'name');
        $options = Option::all();
        $user = User::select('*')->where('id' , $id)->first();
        return view('users.edit', compact('user', 'roles', 'options'));
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
        $user = User::select('*')->where('id' , $id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
       
        $user->update($request->all());
        
        $user_role = DB::table('role_user')->where('user_id',$id);
        
        $user_role->delete();
        $roles = $request->input('roles') ? $request->input('roles') : [];   
        $id_role = Role::select('id')->where('name', $roles)->get()->first()->toArray();   
        
        $id = DB::table('role_user')->latest('id')->first();
        foreach ($id_role as $key => $value) {
            DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [$id->id + 1,$user->id, $value]);
        }
        
        toast(trans('User has been successfully updated.'), 'success');

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::select('*')->where('id' , $id);
        $user_role = DB::table('role_user')->where('user_id',$id);
        
        $user_role->delete();
        $user->delete();
        toast('User has been successfully removed !','error');
        return back();
    }
}
