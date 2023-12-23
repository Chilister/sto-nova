<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FuelTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fuel_types')->delete();
        
        \DB::table('fuel_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'benzin',
                'title' => 'Бензин',
                'created_at' => '2023-03-23 18:26:50',
                'updated_at' => '2023-03-23 18:26:50',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'dizel',
                'title' => 'Дизель',
                'created_at' => '2023-03-23 18:26:56',
                'updated_at' => '2023-03-23 18:26:56',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'gaz',
                'title' => 'Газ',
                'created_at' => '2023-03-23 18:27:01',
                'updated_at' => '2023-03-23 18:27:01',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'gazbenzin',
                'title' => 'Газ/Бензин',
                'created_at' => '2023-03-23 18:27:18',
                'updated_at' => '2023-03-23 18:27:18',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'gibrid',
                'title' => 'Гібрид',
                'created_at' => '2023-03-23 18:27:32',
                'updated_at' => '2023-03-23 18:27:32',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'elektro',
                'title' => 'Електро',
                'created_at' => '2023-03-23 18:27:39',
                'updated_at' => '2023-03-23 18:27:39',
            ),
        ));
        
        
    }
}