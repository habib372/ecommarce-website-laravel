<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Str;
use Hash;
use DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->insert([                                   
            [
                'id'=>1, 'name'=>'Habibur Rahman', 'type'=>'superadmin', 'mobile'=>'+8801767177372', 'email'=>'habibsoft372@gmail.com', 'email_verified_at'=>'2022-05-07 03:25:10', 'password'=>Hash::make('123456'), 'image'=>'superadmin.jpg', 'status'=>'1', 'remember_token' => Str::random(10), 'created_at'=>'2020-01-01', 'updated_at'=>'2020-05-01'
            ],
            [
                'id'=>2, 'name'=>'Ratna Akhter ', 'type'=>'subadmin', 'mobile'=>'+88017161754', 'email'=>'subadmin@gmail.com', 'email_verified_at'=>now(), 'password'=>Hash::make('111111'), 'image'=>'subadmin.jpg', 'status'=>'2', 'remember_token' => Str::random(10), 'created_at'=>'2021-01-01', 'updated_at'=>'2021-06-01'
            ],
            [
                'id'=>3, 'name'=>'Adam Smith ', 'type'=>'User', 'mobile'=>'01767325485', 'email'=>'User@gmail.com', 'email_verified_at'=>now(), 'password'=>Hash::make('222222'), 'image'=>'user.jpg', 'status'=>'3', 'remember_token' => Str::random(10), 'created_at'=>'2022-05-01', 'updated_at'=>'2022-03-01'
            ],
            [
                'id'=>4, 'name'=>'Milon Sarker ', 'type'=>'User', 'mobile'=>'01767325658', 'email'=>'User1@gmail.com', 'email_verified_at'=>now(), 'password'=>Hash::make('333333'), 'image'=>'user1.jpg', 'status'=>'2', 'remember_token' => Str::random(10), 'created_at'=>'2022-07-01', 'updated_at'=>'2022-10-01'
            ],      
        ]);

    }
}
