<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GearboxTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gearbox_types')->delete();
        
        \DB::table('gearbox_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'mekhanika',
                'title' => 'Механіка',
                'created_at' => '2023-03-23 18:28:12',
                'updated_at' => '2023-03-23 18:28:12',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'avtomat',
                'title' => 'Автомат',
                'created_at' => '2023-03-23 18:28:17',
                'updated_at' => '2023-03-23 18:28:17',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'robot',
                'title' => 'Робот',
                'created_at' => '2023-03-23 18:28:21',
                'updated_at' => '2023-03-23 18:28:21',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'variator',
                'title' => 'Варіатор',
                'created_at' => '2023-03-23 18:28:26',
                'updated_at' => '2023-03-23 18:28:26',
            ),
        ));
        
        
    }
}