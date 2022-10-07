<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        DB::table('sections')->insert([                                   
            [ 'name'=>'Men', 'status'=>'1' ],
            [ 'name'=>'Women', 'status'=>'1' ],
            [ 'name'=>'Kids', 'status'=>'1' ],
        ]);
    }
}
