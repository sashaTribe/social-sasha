<?php

namespace Database\Seeders;
use App\Models\UserData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user3 = new UserData();
        $user3->username = "hello345";
        $user3->firstname = "James";
        $user3->surname = "Helpert";
        $user3->password = "abc3422222";
        $user3->email = "j.helper@email.com";
        $user3->save();
        
        UserData::factory()->count(50)->create();

    }
}
