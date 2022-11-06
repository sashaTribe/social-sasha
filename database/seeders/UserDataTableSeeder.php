<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserData;

class UserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user1 = new UserData;
        $user1->username = "sahsa";
        $user1->password = "122444";
        $user1->email = "sasha@gmail.com";
        $user1->save();

    }
}
