<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [ 'title' => 'Điện Thoại',
                'slug' => 'Dien-thoai',
                'parent_id' => '1',
            ],
            [ 'title' => 'Máy Tính',
                'slug' => 'May-tinh',
                'parent_id' => '2',]
        ];
        DB::table('categories') -> insert($data);
    }

}
