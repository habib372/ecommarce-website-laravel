<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\factories\AdminsFactory;
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
        Admin::create([
            'id'=>1, 'name'=>'admin', 'type'=>'admin', 'mobile'=>'01767177372', 'email'=>'habib@gmail.com', 'email_verified_at'=>'2022-05-07 03:25:10', 'password'=>Hash::make('123456'), 'image'=>'habib.jpg', 'status'=>'1', 'remember_token' => Str::random(10), 'created_at'=>'2020-01-01', 'updated_at'=>'2022-01-01'
        ],
        [
            'id'=>2, 'name'=>'User ', 'type'=>'User', 'mobile'=>'01767135214', 'email'=>'User@gmail.com', 'email_verified_at'=>now(), 'password'=>Hash::make('654321'), 'image'=>'user.jpg', 'status'=>'1', 'remember_token' => Str::random(10), 'created_at'=>'2020-01-01', 'updated_at'=>'2022-01-01'
        ]);
    
    }
}
