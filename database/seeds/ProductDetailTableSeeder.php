<?php

use Illuminate\Database\Seeder;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [ 'color' => 'Đỏ',
                'price' => '1400000',
                'sale' => '0',
                'product_id' => '1',
            ],
            [ 'color' => 'Đen',
                'price' => '1700000',
                'sale' => '0',
                'product_id' => '2',]
        ];
        DB::table('product_details') -> insert($data);
    }
}
