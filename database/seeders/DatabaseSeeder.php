<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
           testList::class,
        ]);
        // \App\Models\User::factory(10)->create();
//
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at'=>date('Y-m-d H:i:s'),
            'role'=>'admin',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
//
//
//
//
//        DB::table('users')->insert([
//            'name' => 'operator',
//            'email' => 'operator@gmail.com',
//            'password' => Hash::make('123456789'),
//            'email_verified_at'=>date('Y-m-d H:i:s'),
//            'role'=>'operator',
//            'created_at'=>date('Y-m-d H:i:s'),
//            'updated_at'=>date('Y-m-d H:i:s'),
//        ]);
//
//
//
//
//
//        Country::truncate();
//
//        $countries = [
//            ['name' => 'Afghanistan', 'code' => 'AF'],
//
//        ];
//
//        foreach ($countries as $key => $value) {
//            Country::create($value);
//        }
//
//
//        State::truncate();
//
//        $usSatates = [
//              ["name" => "Alabama", "code" => "AL"],
//
//            ];
//
//        foreach ($usSatates as $key => $state) {
//            State::create($state);
//        }




    }
}
