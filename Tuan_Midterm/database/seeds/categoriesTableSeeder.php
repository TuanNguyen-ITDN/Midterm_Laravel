<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['cat_name' => 'Thời Trang Nam','parent_id' => '1'],
            ['cat_name' => 'Thời Trang Nữ','parent_id' => '2'],
            
        ]); 
    }
}
