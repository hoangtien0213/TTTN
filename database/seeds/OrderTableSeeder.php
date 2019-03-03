<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [ 'order_date' => '2019-02-13 00:00:00',
                'to_name' => 'Hoàng Tiến',
                'to_address' => 'Xuan Cam',
                'to_district' => 'Hiep Hoa',
                'to_city' => 'Bac Giang',
                'to_country' => 'Viet Nam',
                'to_telephone' => '0969359314',
                'user_id'=>'1'],

            [ 'order_date' => '2019-02-13 00:00:00',
                'to_name' => 'Hoàng Hải Anh',
                'to_address' => 'Xuan Cam',
                'to_district' => 'Hiep Hoa',
                'to_city' => 'Bac Giang',
                'to_country' => 'Viet Nam',
                'to_telephone' => '0969359314',
                'user_id'=>'2',
            ],

        ];
        DB::table('orders') -> insert($data);
    }
}
