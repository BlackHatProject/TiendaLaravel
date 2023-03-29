<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = new User();

        $admin->name = "LegendaryAdmin";
        $admin->email = "legendaryadmin@mail.com";
        $admin->password = "doom1234";
        $admin->type = 2;

        $admin->save();

        $user1 = new User();

        $user1->name = "vendedor_tecnologia";
        $user1->email = "tecnologias@mail.com";
        $user1->password = bcrypt("1234");
        $user1->type = 1;

        $user1->save();

        $user2 = new User();

    }
}
