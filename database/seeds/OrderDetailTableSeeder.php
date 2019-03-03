<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'quantity' => '10',
                'total_cost' => '14000000',
                'order_id' => '1',
                'product_detail_id' => '1',
            ],
            [ 'quantity' => '10',
                'total_cost' => '17000000',
                'order_id' => '2',
                'product_detail_id' => '2',]
        ];
        DB::table('order_details') -> insert($data);
    }
}
