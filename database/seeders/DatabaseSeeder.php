<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user= User::create([
            "username"=>"noorLight",
            "email"=>"contactwnoor@gmail.com",
            "password"=>"6984125o",
        ]);


        //save role

        $role= $user->roles()->create([
            "name"=>"ROLE_ADMIN",
        ]);
        $user->roles()->sync([$role->id]);
    }
}
