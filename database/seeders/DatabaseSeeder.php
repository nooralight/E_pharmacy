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
        

        $user1= User::create([
            "username"=>"shovon",
            "email"=>"shovon@gmail.com",
            "password"=>"1234",
        ]);


        //save role

        $role1= $user1->roles()->create([
            "name"=>"ROLE_ADMIN",
        ]);
        $user1->roles()->sync([$role1->id]);
    }
}
