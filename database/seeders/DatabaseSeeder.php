<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $user =
            User::create(
            [
                'name' =>'Dr.Steve',
                'firstname'=> 'Steven',
                'lastname'=>'Deemer',
                'address'=>'',
                'address2'=>'',
                'city'=>'Hollywood',
                "state"=>'FL',
                'zipcode'=>'33020',
                'phone'=>'9543910398',
                'email'=>'dr.steve@steven.news',
                'password'=>  Hash::make('password'),


            ]
        );


    }
}
