<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([                                   
            [ 'name'=>'Men', 'status'=>'1' ],
            [ 'name'=>'Women', 'status'=>'1' ],
            [ 'name'=>'Kids', 'status'=>'0' ],
        ]);
    }
}
