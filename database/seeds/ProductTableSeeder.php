<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [ 'title' => 'Sam Sung galaxy S9+',
                'des' => 'Điện thoại thông minh',
                'quantity' => '10',
                'category_id' => '1',
            ],
            [ 'title' => 'Asus GL552VX',
                'des' => 'Máy tính',
                'quantity' => '20',
                'category_id' => '2',]
        ];
        DB::table('products') -> insert($data);
    }
}
