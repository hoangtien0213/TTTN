<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [ 'key' => 'FB',
                'value' => 'Facebook',
            ],
            [ 'key' => 'YT',
                'value' => 'Youtube',
            ],
            [ 'key' => 'Ins',
                'value' => 'Instagram',
            ],
            [ 'key' => 'GG',
                'value' => 'Google',
            ],
            [ 'key' => 'Twitter',
                'value' => 'Twitter',
            ],
            [ 'key' => 'Footer',
                'value' => 'Code footer',
            ],
        ];
        DB::table('settings') -> insert($data);
    }
}
