<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
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
                'alt'=>'Lỗi',
                'slug' => 'Dien-thoai',
                'product_id' => '1',
            ],
            [ 'title' => 'Máy Tính',
                'alt'=>'Lỗi',
                'slug' => 'May-Tinh',
                'product_id' => '2',]
        ];
        DB::table('product_images') -> insert($data);
    }
}
