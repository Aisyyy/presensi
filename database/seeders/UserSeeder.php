<?php

namespace Database\Seeders;
use App\Models\User;
use illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::truncate();
        user::create(
        [
            'id_asisten'=>'A123s',
            'name' =>'Admin',
            'Role'=>'Admin',
            'email'=>'Admin@mail.com',
            'password'=>bcrypt('admin'),
            'remember_token'=> Str::random(60),
        ]);

        User::create([
            'id_asisten'=>'H456j',
            'name' => 'Staff',
            'Role' => 'Staff',
            'email' => 'staff@mail.com',
            'password' => bcrypt('inistaff'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'id_asisten'=>'Q876w',
            'name' => 'PJ',
            'Role' => 'Pj',
            'email' => 'penanggungj@mail.com',
            'password' => bcrypt('inipj'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'id_asisten'=>'y675S',
            'name' => 'Asisten',
            'Role' => 'Asisten',
            'email' => 'Assist@mail.com',
            'password' => bcrypt('iniassist'),
            'remember_token' => Str::random(60),
        ]);
    }
}
