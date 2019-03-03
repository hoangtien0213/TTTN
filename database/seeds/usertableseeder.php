<?php

use Illuminate\Database\Seeder;

class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[
           [ 'name' => 'user 1',
        'email' => 'hoangtien0213@gmail.com',
        'password' => bcrypt('123456'),
        'level' => 'admin',
        'address' => 'Xuan Cam',
        'district' => 'Hiep Hoa',
        'city' => 'Bac Giang',
        'country' => 'Viet Nam',
        'telephone' => '0969359314'],
           [ 'name' => 'user 2',
               'email' => 'hoangtien197@gmail.com',
               'password' =>  bcrypt('123456'),
               'level' => 'thanhvien',
               'address' => 'Xuan Cam',
               'district' => 'Hiep Hoa',
               'city' => 'Bac Giang',
               'country' => 'Viet Nam',
               'telephone' => '0969359314']
       ];
    DB::table('users') -> insert($data);
    }
}
