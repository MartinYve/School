<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Koue',
            'last_name' => 'Martin',
            'matricule' => 'G-124356',
            'option_id' => 2 ,
            'email' => 'kouesilas@gmail.com',
            'phone_number' => '656867655',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [1,$user1->id,1]);
        $user1 = User::create([
            'name' => 'Enseignant',
            'last_name' => 'Yvan',
            'matricule' => 'E-23456',
            'option_id' => 2 ,
            'email' => 'Enseignant@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [2,$user1->id,2]);




        $user3 = User::create([
            'name' => 'MARTIN',
            'last_name' => 'YVE',
            'matricule' => 'Y-124356',
            'option_id' => 1 ,
            'email' => 'anselmessanga@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [3,$user3->id,3]);
        $user4 = User::create([
            'name' => 'ETUDIANT',
            'last_name' => 'Ines',
            'matricule' => 'H-23456',
            'option_id' => 1 ,
            'email' => 'kouesilas3@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [4,$user4->id,3]);

        $user5 = User::create([
            'name' => 'Brinda',
            'last_name' => 'Zoe',
            'matricule' => 'U-23456',
            'option_id' => 1 ,
            'email' => 'lololololol2@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [5,$user5->id,3]);
        $user6 = User::create([
            'name' => 'Brinda',
            'last_name' => 'Zoe',
            'matricule' => 'U-23456',
            'option_id' => 1 ,
            'email' => 'mouiouio8@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [6,$user6->id,3]);

        $user6 = User::create([
            'name' => 'Delegue',
            'last_name' => 'new',
            'matricule' => 'U-23456',
            'option_id' => 2,
            'email' => 'josias82@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [7,$user6->id,4]);
    }
}
