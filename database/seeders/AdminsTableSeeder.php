<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
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
            'id'=>1, 'name'=>'admin', 'type'=>'admin', 'mobile'=>'01767177372', 'email'=>'habib@gmail.com', 'email_verified_at'=>'2022-05-07 03:25:10', 'password'=>Hash::make('123456'), 'image'=>'habib.jpg', 'status'=>'1', 'remember_token'=>'', 'created_at'=>'2020-01-01', 'updated_at'=>'2022-01-01'
        ]);
    }
}
