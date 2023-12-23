<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DriveTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drive_types')->delete();
        
        \DB::table('drive_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'perednii',
                'title' => 'Передній',
                'created_at' => '2023-03-23 18:26:24',
                'updated_at' => '2023-03-23 18:26:24',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'zadnii',
                'title' => 'Задній',
                'created_at' => '2023-03-23 18:26:35',
                'updated_at' => '2023-03-23 18:26:35',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'povnii',
                'title' => 'Повний',
                'created_at' => '2023-03-23 18:26:39',
                'updated_at' => '2023-03-23 18:26:39',
            ),
        ));
        
        
    }
}