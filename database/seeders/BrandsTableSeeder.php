<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'ac',
                'title' => 'AC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'acura',
                'title' => 'Acura',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'adler',
                'title' => 'Adler',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'gac-aion',
                'title' => 'GAC Aion',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'aito',
                'title' => 'Aito',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'alfa-romeo',
                'title' => 'Alfa Romeo',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'alpina',
                'title' => 'Alpina',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'alpine',
                'title' => 'Alpine',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'amc',
                'title' => 'AMC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'am-general',
                'title' => 'AM General',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'apal',
                'title' => 'Apal',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'arcfox',
                'title' => 'Arcfox',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'ariel',
                'title' => 'Ariel',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'aro',
                'title' => 'Aro',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'asia',
                'title' => 'Asia',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            15 => 
            array (
                'id' => 16,
                'slug' => 'aston-martin',
                'title' => 'Aston Martin',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            16 => 
            array (
                'id' => 17,
                'slug' => 'auburn',
                'title' => 'Auburn',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            17 => 
            array (
                'id' => 18,
                'slug' => 'audi',
                'title' => 'Audi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            18 => 
            array (
                'id' => 19,
                'slug' => 'aurus',
                'title' => 'Aurus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            19 => 
            array (
                'id' => 20,
                'slug' => 'austin',
                'title' => 'Austin',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:34',
                'updated_at' => '2023-03-23 18:05:34',
            ),
            20 => 
            array (
                'id' => 21,
                'slug' => 'austin-healey',
                'title' => 'Austin Healey',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            21 => 
            array (
                'id' => 22,
                'slug' => 'autobianchi',
                'title' => 'Autobianchi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            22 => 
            array (
                'id' => 23,
                'slug' => 'auto-union',
                'title' => 'Auto Union',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            23 => 
            array (
                'id' => 24,
                'slug' => 'avatr',
                'title' => 'Avatr',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            24 => 
            array (
                'id' => 25,
                'slug' => 'avtokam',
                'title' => 'Автокам',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            25 => 
            array (
                'id' => 26,
                'slug' => 'baic',
                'title' => 'BAIC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            26 => 
            array (
                'id' => 27,
                'slug' => 'bajaj',
                'title' => 'Bajaj',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            27 => 
            array (
                'id' => 28,
                'slug' => 'baltijas-dzips',
                'title' => 'Baltijas Dzips',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            28 => 
            array (
                'id' => 29,
                'slug' => 'baojun',
                'title' => 'Baojun',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            29 => 
            array (
                'id' => 30,
                'slug' => 'batmobile',
                'title' => 'Batmobile',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            30 => 
            array (
                'id' => 31,
                'slug' => 'bentley',
                'title' => 'Bentley',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            31 => 
            array (
                'id' => 32,
                'slug' => 'bertone',
                'title' => 'Bertone',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            32 => 
            array (
                'id' => 33,
                'slug' => 'bilenkin',
                'title' => 'Bilenkin',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            33 => 
            array (
                'id' => 34,
                'slug' => 'bio-auto',
                'title' => 'Bio auto',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            34 => 
            array (
                'id' => 35,
                'slug' => 'bitter',
                'title' => 'Bitter',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            35 => 
            array (
                'id' => 36,
                'slug' => 'blaval',
                'title' => 'Blaval',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            36 => 
            array (
                'id' => 37,
                'slug' => 'bmw',
                'title' => 'BMW',
                'priority' => 0,
                'created_at' => '2023-03-23 18:05:35',
                'updated_at' => '2023-03-23 18:05:35',
            ),
            37 => 
            array (
                'id' => 38,
                'slug' => 'borgward',
                'title' => 'Borgward',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            38 => 
            array (
                'id' => 39,
                'slug' => 'brabus',
                'title' => 'Brabus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            39 => 
            array (
                'id' => 40,
                'slug' => 'brilliance',
                'title' => 'Brilliance',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            40 => 
            array (
                'id' => 41,
                'slug' => 'bristol',
                'title' => 'Bristol',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            41 => 
            array (
                'id' => 42,
                'slug' => 'bufori',
                'title' => 'Bufori',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            42 => 
            array (
                'id' => 43,
                'slug' => 'bugatti',
                'title' => 'Bugatti',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            43 => 
            array (
                'id' => 44,
                'slug' => 'buick',
                'title' => 'Buick',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            44 => 
            array (
                'id' => 45,
                'slug' => 'byd',
                'title' => 'BYD',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:02',
                'updated_at' => '2023-03-23 18:06:02',
            ),
            45 => 
            array (
                'id' => 46,
                'slug' => 'byvin',
                'title' => 'Byvin',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            46 => 
            array (
                'id' => 47,
                'slug' => 'cadillac',
                'title' => 'Cadillac',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            47 => 
            array (
                'id' => 48,
                'slug' => 'callaway',
                'title' => 'Callaway',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            48 => 
            array (
                'id' => 49,
                'slug' => 'carbodies',
                'title' => 'Carbodies',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            49 => 
            array (
                'id' => 50,
                'slug' => 'caterham',
                'title' => 'Caterham',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            50 => 
            array (
                'id' => 51,
                'slug' => 'chana',
                'title' => 'Chana',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            51 => 
            array (
                'id' => 52,
                'slug' => 'changan',
                'title' => 'Changan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            52 => 
            array (
                'id' => 53,
                'slug' => 'changfeng',
                'title' => 'ChangFeng',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            53 => 
            array (
                'id' => 54,
                'slug' => 'changhe',
                'title' => 'Changhe',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            54 => 
            array (
                'id' => 55,
                'slug' => 'chery',
                'title' => 'Chery',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            55 => 
            array (
                'id' => 56,
                'slug' => 'exeed',
                'title' => 'EXEED',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            56 => 
            array (
                'id' => 57,
                'slug' => 'chevrolet',
                'title' => 'Chevrolet',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            57 => 
            array (
                'id' => 58,
                'slug' => 'chrysler',
                'title' => 'Chrysler',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:03',
                'updated_at' => '2023-03-23 18:06:03',
            ),
            58 => 
            array (
                'id' => 59,
                'slug' => 'ciimo-dongfeng-honda',
            'title' => 'Ciimo (DongFeng-Honda)',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            59 => 
            array (
                'id' => 60,
                'slug' => 'citroen',
                'title' => 'Citroen',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            60 => 
            array (
                'id' => 61,
                'slug' => 'cizeta',
                'title' => 'Cizeta',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            61 => 
            array (
                'id' => 62,
                'slug' => 'coggiola',
                'title' => 'Coggiola',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            62 => 
            array (
                'id' => 63,
                'slug' => 'cord',
                'title' => 'Cord',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            63 => 
            array (
                'id' => 64,
                'slug' => 'cupra',
                'title' => 'Cupra',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            64 => 
            array (
                'id' => 65,
                'slug' => 'dacia',
                'title' => 'Dacia',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            65 => 
            array (
                'id' => 66,
                'slug' => 'dadi',
                'title' => 'Dadi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            66 => 
            array (
                'id' => 67,
                'slug' => 'daewoo',
                'title' => 'Daewoo',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            67 => 
            array (
                'id' => 68,
                'slug' => 'daihatsu',
                'title' => 'Daihatsu',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:04',
                'updated_at' => '2023-03-23 18:06:04',
            ),
            68 => 
            array (
                'id' => 69,
                'slug' => 'daimler',
                'title' => 'Daimler',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            69 => 
            array (
                'id' => 70,
                'slug' => 'dallara',
                'title' => 'Dallara',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            70 => 
            array (
                'id' => 71,
                'slug' => 'datsun',
                'title' => 'Datsun',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            71 => 
            array (
                'id' => 72,
                'slug' => 'deco-rides',
                'title' => 'Deco Rides',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            72 => 
            array (
                'id' => 73,
                'slug' => 'delage',
                'title' => 'Delage',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            73 => 
            array (
                'id' => 74,
                'slug' => 'delorean',
                'title' => 'DeLorean',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            74 => 
            array (
                'id' => 75,
                'slug' => 'denza',
                'title' => 'Denza',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            75 => 
            array (
                'id' => 76,
                'slug' => 'derways',
                'title' => 'Derways',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            76 => 
            array (
                'id' => 77,
                'slug' => 'desoto',
                'title' => 'DeSoto',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            77 => 
            array (
                'id' => 78,
                'slug' => 'de-tomaso',
                'title' => 'De Tomaso',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            78 => 
            array (
                'id' => 79,
                'slug' => 'dkw',
                'title' => 'DKW',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            79 => 
            array (
                'id' => 80,
                'slug' => 'dodge',
                'title' => 'Dodge',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            80 => 
            array (
                'id' => 81,
                'slug' => 'dongfeng',
                'title' => 'DongFeng',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            81 => 
            array (
                'id' => 82,
                'slug' => 'doninvest',
                'title' => 'Doninvest',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            82 => 
            array (
                'id' => 83,
                'slug' => 'donkervoort',
                'title' => 'Donkervoort',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            83 => 
            array (
                'id' => 84,
                'slug' => 'ds',
                'title' => 'DS',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            84 => 
            array (
                'id' => 85,
                'slug' => 'dw-hower',
                'title' => 'DW Hower',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            85 => 
            array (
                'id' => 86,
                'slug' => 'eagle',
                'title' => 'Eagle',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            86 => 
            array (
                'id' => 87,
                'slug' => 'eagle-cars',
                'title' => 'Eagle Cars',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            87 => 
            array (
                'id' => 88,
                'slug' => 'everus',
                'title' => 'Everus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            88 => 
            array (
                'id' => 89,
                'slug' => 'evolute',
                'title' => 'Evolute',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            89 => 
            array (
                'id' => 90,
                'slug' => 'excalibur',
                'title' => 'Excalibur',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            90 => 
            array (
                'id' => 91,
                'slug' => 'e-car',
                'title' => 'E-Car',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            91 => 
            array (
                'id' => 92,
                'slug' => 'io-mobil',
                'title' => 'Ё-мобиль',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            92 => 
            array (
                'id' => 93,
                'slug' => 'facel-vega',
                'title' => 'Facel Vega',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            93 => 
            array (
                'id' => 94,
                'slug' => 'faw',
                'title' => 'FAW',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            94 => 
            array (
                'id' => 95,
                'slug' => 'ferrari',
                'title' => 'Ferrari',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            95 => 
            array (
                'id' => 96,
                'slug' => 'fiat',
                'title' => 'Fiat',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:11',
                'updated_at' => '2023-03-23 18:06:11',
            ),
            96 => 
            array (
                'id' => 97,
                'slug' => 'fisker',
                'title' => 'Fisker',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            97 => 
            array (
                'id' => 98,
                'slug' => 'flanker',
                'title' => 'Flanker',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            98 => 
            array (
                'id' => 99,
                'slug' => 'ford',
                'title' => 'Ford',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            99 => 
            array (
                'id' => 100,
                'slug' => 'dongfeng-forthing',
                'title' => 'Dongfeng Forthing',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            100 => 
            array (
                'id' => 101,
                'slug' => 'foton',
                'title' => 'Foton',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            101 => 
            array (
                'id' => 102,
                'slug' => 'fso',
                'title' => 'FSO',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            102 => 
            array (
                'id' => 103,
                'slug' => 'fuqi',
                'title' => 'Fuqi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            103 => 
            array (
                'id' => 104,
                'slug' => 'gac',
                'title' => 'GAC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            104 => 
            array (
                'id' => 105,
                'slug' => 'gaz',
                'title' => 'ГАЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            105 => 
            array (
                'id' => 106,
                'slug' => 'geely',
                'title' => 'Geely',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            106 => 
            array (
                'id' => 107,
                'slug' => 'genesis',
                'title' => 'Genesis',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            107 => 
            array (
                'id' => 108,
                'slug' => 'geo',
                'title' => 'Geo',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            108 => 
            array (
                'id' => 109,
                'slug' => 'gmc',
                'title' => 'GMC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            109 => 
            array (
                'id' => 110,
                'slug' => 'goggomobil',
                'title' => 'Goggomobil',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            110 => 
            array (
                'id' => 111,
                'slug' => 'gonow',
                'title' => 'Gonow',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            111 => 
            array (
                'id' => 112,
                'slug' => 'gordon',
                'title' => 'Gordon',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:12',
                'updated_at' => '2023-03-23 18:06:12',
            ),
            112 => 
            array (
                'id' => 113,
                'slug' => 'gp',
                'title' => 'GP',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:13',
                'updated_at' => '2023-03-23 18:06:13',
            ),
            113 => 
            array (
                'id' => 114,
                'slug' => 'great-wall',
                'title' => 'Great Wall',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:13',
                'updated_at' => '2023-03-23 18:06:13',
            ),
            114 => 
            array (
                'id' => 115,
                'slug' => 'hafei',
                'title' => 'Hafei',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:13',
                'updated_at' => '2023-03-23 18:06:13',
            ),
            115 => 
            array (
                'id' => 116,
                'slug' => 'haima',
                'title' => 'Haima',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:13',
                'updated_at' => '2023-03-23 18:06:13',
            ),
            116 => 
            array (
                'id' => 117,
                'slug' => 'hanomag',
                'title' => 'Hanomag',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            117 => 
            array (
                'id' => 118,
                'slug' => 'haval',
                'title' => 'Haval',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            118 => 
            array (
                'id' => 119,
                'slug' => 'hawtai',
                'title' => 'Hawtai',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            119 => 
            array (
                'id' => 120,
                'slug' => 'heinkel',
                'title' => 'Heinkel',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            120 => 
            array (
                'id' => 121,
                'slug' => 'hennessey',
                'title' => 'Hennessey',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            121 => 
            array (
                'id' => 122,
                'slug' => 'hindustan',
                'title' => 'Hindustan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            122 => 
            array (
                'id' => 123,
                'slug' => 'hiphi',
                'title' => 'HiPhi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            123 => 
            array (
                'id' => 124,
                'slug' => 'hispano-suiza',
                'title' => 'Hispano-Suiza',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            124 => 
            array (
                'id' => 125,
                'slug' => 'holden',
                'title' => 'Holden',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            125 => 
            array (
                'id' => 126,
                'slug' => 'honda',
                'title' => 'Honda',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            126 => 
            array (
                'id' => 127,
                'slug' => 'hongqi',
                'title' => 'Hongqi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            127 => 
            array (
                'id' => 128,
                'slug' => 'horch',
                'title' => 'Horch',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            128 => 
            array (
                'id' => 129,
                'slug' => 'hozon',
                'title' => 'Hozon',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            129 => 
            array (
                'id' => 130,
                'slug' => 'hsv',
                'title' => 'HSV',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            130 => 
            array (
                'id' => 131,
                'slug' => 'huanghai',
                'title' => 'HuangHai',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            131 => 
            array (
                'id' => 132,
                'slug' => 'hudson',
                'title' => 'Hudson',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            132 => 
            array (
                'id' => 133,
                'slug' => 'hummer',
                'title' => 'Hummer',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            133 => 
            array (
                'id' => 134,
                'slug' => 'hyundai',
                'title' => 'Hyundai',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:15',
                'updated_at' => '2023-03-23 18:06:15',
            ),
            134 => 
            array (
                'id' => 135,
                'slug' => 'izh',
                'title' => 'ИЖ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            135 => 
            array (
                'id' => 136,
                'slug' => 'infiniti',
                'title' => 'Infiniti',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            136 => 
            array (
                'id' => 137,
                'slug' => 'innocenti',
                'title' => 'Innocenti',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            137 => 
            array (
                'id' => 138,
                'slug' => 'international',
                'title' => 'International',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            138 => 
            array (
                'id' => 139,
                'slug' => 'invicta',
                'title' => 'Invicta',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            139 => 
            array (
                'id' => 140,
                'slug' => 'iran-khodro',
                'title' => 'Iran Khodro',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            140 => 
            array (
                'id' => 141,
                'slug' => 'isdera',
                'title' => 'Isdera',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            141 => 
            array (
                'id' => 142,
                'slug' => 'isuzu',
                'title' => 'Isuzu',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            142 => 
            array (
                'id' => 143,
                'slug' => 'iveco',
                'title' => 'IVECO',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            143 => 
            array (
                'id' => 144,
                'slug' => 'jac',
                'title' => 'JAC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            144 => 
            array (
                'id' => 145,
                'slug' => 'jaguar',
                'title' => 'Jaguar',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            145 => 
            array (
                'id' => 146,
                'slug' => 'jeep',
                'title' => 'Jeep',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            146 => 
            array (
                'id' => 147,
                'slug' => 'jensen',
                'title' => 'Jensen',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            147 => 
            array (
                'id' => 148,
                'slug' => 'jetour',
                'title' => 'Jetour',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            148 => 
            array (
                'id' => 149,
                'slug' => 'jetta',
                'title' => 'Jetta',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            149 => 
            array (
                'id' => 150,
                'slug' => 'jinbei',
                'title' => 'Jinbei',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            150 => 
            array (
                'id' => 151,
                'slug' => 'jmc',
                'title' => 'JMC',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            151 => 
            array (
                'id' => 152,
                'slug' => 'kaiyi',
                'title' => 'Kaiyi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            152 => 
            array (
                'id' => 153,
                'slug' => 'kanonir',
                'title' => 'Канонир',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            153 => 
            array (
                'id' => 154,
                'slug' => 'kia',
                'title' => 'Kia',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            154 => 
            array (
                'id' => 155,
                'slug' => 'koenigsegg',
                'title' => 'Koenigsegg',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            155 => 
            array (
                'id' => 156,
                'slug' => 'kombat',
                'title' => 'Комбат',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            156 => 
            array (
                'id' => 157,
                'slug' => 'ktm-ag',
                'title' => 'KTM AG',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            157 => 
            array (
                'id' => 158,
                'slug' => 'lamborghini',
                'title' => 'Lamborghini',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            158 => 
            array (
                'id' => 159,
                'slug' => 'lancia',
                'title' => 'Lancia',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:16',
                'updated_at' => '2023-03-23 18:06:16',
            ),
            159 => 
            array (
                'id' => 160,
                'slug' => 'landwind',
                'title' => 'Landwind',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:17',
                'updated_at' => '2023-03-23 18:06:17',
            ),
            160 => 
            array (
                'id' => 161,
                'slug' => 'land-rover',
                'title' => 'Land Rover',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:17',
                'updated_at' => '2023-03-23 18:06:17',
            ),
            161 => 
            array (
                'id' => 162,
                'slug' => 'leapmotor',
                'title' => 'Leapmotor',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            162 => 
            array (
                'id' => 163,
                'slug' => 'lexus',
                'title' => 'Lexus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            163 => 
            array (
                'id' => 164,
                'slug' => 'liebao-motor',
                'title' => 'Liebao Motor',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            164 => 
            array (
                'id' => 165,
                'slug' => 'lifan',
                'title' => 'Lifan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            165 => 
            array (
                'id' => 166,
                'slug' => 'ligier',
                'title' => 'Ligier',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            166 => 
            array (
                'id' => 167,
                'slug' => 'lincoln',
                'title' => 'Lincoln',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:18',
                'updated_at' => '2023-03-23 18:06:18',
            ),
            167 => 
            array (
                'id' => 168,
                'slug' => 'lixiang',
                'title' => 'LiXiang',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            168 => 
            array (
                'id' => 169,
                'slug' => 'logem',
                'title' => 'Logem',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            169 => 
            array (
                'id' => 170,
                'slug' => 'lotus',
                'title' => 'Lotus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            170 => 
            array (
                'id' => 171,
                'slug' => 'lti',
                'title' => 'LTI',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            171 => 
            array (
                'id' => 172,
                'slug' => 'luaz',
                'title' => 'ЛуАЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            172 => 
            array (
                'id' => 173,
                'slug' => 'lucid',
                'title' => 'Lucid',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            173 => 
            array (
                'id' => 174,
                'slug' => 'luxgen',
                'title' => 'Luxgen',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            174 => 
            array (
                'id' => 175,
                'slug' => 'lynk-co',
                'title' => 'Lynk & Co',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            175 => 
            array (
                'id' => 176,
                'slug' => 'mahindra',
                'title' => 'Mahindra',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            176 => 
            array (
                'id' => 177,
                'slug' => 'marcos',
                'title' => 'Marcos',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            177 => 
            array (
                'id' => 178,
                'slug' => 'marlin',
                'title' => 'Marlin',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            178 => 
            array (
                'id' => 179,
                'slug' => 'marussia',
                'title' => 'Marussia',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            179 => 
            array (
                'id' => 180,
                'slug' => 'maruti',
                'title' => 'Maruti',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            180 => 
            array (
                'id' => 181,
                'slug' => 'maserati',
                'title' => 'Maserati',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            181 => 
            array (
                'id' => 182,
                'slug' => 'matra',
                'title' => 'Matra',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            182 => 
            array (
                'id' => 183,
                'slug' => 'maxus',
                'title' => 'Maxus',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            183 => 
            array (
                'id' => 184,
                'slug' => 'maybach',
                'title' => 'Maybach',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            184 => 
            array (
                'id' => 185,
                'slug' => 'mazda',
                'title' => 'Mazda',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            185 => 
            array (
                'id' => 186,
                'slug' => 'mclaren',
                'title' => 'McLaren',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            186 => 
            array (
                'id' => 187,
                'slug' => 'mega',
                'title' => 'Mega',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            187 => 
            array (
                'id' => 188,
                'slug' => 'mercedes-benz',
                'title' => 'Mercedes-Benz',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:19',
                'updated_at' => '2023-03-23 18:06:19',
            ),
            188 => 
            array (
                'id' => 189,
                'slug' => 'mercury',
                'title' => 'Mercury',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            189 => 
            array (
                'id' => 190,
                'slug' => 'messerschmitt',
                'title' => 'Messerschmitt',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            190 => 
            array (
                'id' => 191,
                'slug' => 'metrocab',
                'title' => 'Metrocab',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            191 => 
            array (
                'id' => 192,
                'slug' => 'mg',
                'title' => 'MG',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            192 => 
            array (
                'id' => 193,
                'slug' => 'microcar',
                'title' => 'Microcar',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            193 => 
            array (
                'id' => 194,
                'slug' => 'minelli',
                'title' => 'Minelli',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            194 => 
            array (
                'id' => 195,
                'slug' => 'mini',
                'title' => 'MINI',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            195 => 
            array (
                'id' => 196,
                'slug' => 'mitsubishi',
                'title' => 'Mitsubishi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:20',
                'updated_at' => '2023-03-23 18:06:20',
            ),
            196 => 
            array (
                'id' => 197,
                'slug' => 'mitsuoka',
                'title' => 'Mitsuoka',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            197 => 
            array (
                'id' => 198,
                'slug' => 'mobilize',
                'title' => 'Mobilize',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            198 => 
            array (
                'id' => 199,
                'slug' => 'morgan',
                'title' => 'Morgan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            199 => 
            array (
                'id' => 200,
                'slug' => 'morris',
                'title' => 'Morris',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            200 => 
            array (
                'id' => 201,
                'slug' => 'moskvich',
                'title' => 'Москвич',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            201 => 
            array (
                'id' => 202,
                'slug' => 'nash',
                'title' => 'Nash',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            202 => 
            array (
                'id' => 203,
                'slug' => 'nio',
                'title' => 'Nio',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            203 => 
            array (
                'id' => 204,
                'slug' => 'nissan',
                'title' => 'Nissan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:22',
                'updated_at' => '2023-03-23 18:06:22',
            ),
            204 => 
            array (
                'id' => 205,
                'slug' => 'noble',
                'title' => 'Noble',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            205 => 
            array (
                'id' => 206,
                'slug' => 'oldsmobile',
                'title' => 'Oldsmobile',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            206 => 
            array (
                'id' => 207,
                'slug' => 'omoda',
                'title' => 'OMODA',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            207 => 
            array (
                'id' => 208,
                'slug' => 'opel',
                'title' => 'Opel',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            208 => 
            array (
                'id' => 209,
                'slug' => 'ora',
                'title' => 'ORA',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            209 => 
            array (
                'id' => 210,
                'slug' => 'osca',
                'title' => 'Osca',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            210 => 
            array (
                'id' => 211,
                'slug' => 'oshan',
                'title' => 'Oshan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            211 => 
            array (
                'id' => 212,
                'slug' => 'packard',
                'title' => 'Packard',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            212 => 
            array (
                'id' => 213,
                'slug' => 'pagani',
                'title' => 'Pagani',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            213 => 
            array (
                'id' => 214,
                'slug' => 'panoz',
                'title' => 'Panoz',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            214 => 
            array (
                'id' => 215,
                'slug' => 'perodua',
                'title' => 'Perodua',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            215 => 
            array (
                'id' => 216,
                'slug' => 'peugeot',
                'title' => 'Peugeot',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            216 => 
            array (
                'id' => 217,
                'slug' => 'pgo',
                'title' => 'PGO',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            217 => 
            array (
                'id' => 218,
                'slug' => 'piaggio',
                'title' => 'Piaggio',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            218 => 
            array (
                'id' => 219,
                'slug' => 'pierce-arrow',
                'title' => 'Pierce-Arrow',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            219 => 
            array (
                'id' => 220,
                'slug' => 'plymouth',
                'title' => 'Plymouth',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            220 => 
            array (
                'id' => 221,
                'slug' => 'polestar',
                'title' => 'Polestar',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            221 => 
            array (
                'id' => 222,
                'slug' => 'pontiac',
                'title' => 'Pontiac',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            222 => 
            array (
                'id' => 223,
                'slug' => 'porsche',
                'title' => 'Porsche',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            223 => 
            array (
                'id' => 224,
                'slug' => 'premier',
                'title' => 'Premier',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            224 => 
            array (
                'id' => 225,
                'slug' => 'sportivnye-avto-i-repliki',
                'title' => 'Спортивные авто и Реплики',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            225 => 
            array (
                'id' => 226,
                'slug' => 'proton',
                'title' => 'Proton',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:23',
                'updated_at' => '2023-03-23 18:06:23',
            ),
            226 => 
            array (
                'id' => 227,
                'slug' => 'puch',
                'title' => 'PUCH',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            227 => 
            array (
                'id' => 228,
                'slug' => 'puma',
                'title' => 'Puma',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            228 => 
            array (
                'id' => 229,
                'slug' => 'qoros',
                'title' => 'Qoros',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            229 => 
            array (
                'id' => 230,
                'slug' => 'qvale',
                'title' => 'Qvale',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            230 => 
            array (
                'id' => 231,
                'slug' => 'ram',
                'title' => 'RAM',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            231 => 
            array (
                'id' => 232,
                'slug' => 'ravon',
                'title' => 'Ravon',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            232 => 
            array (
                'id' => 233,
                'slug' => 'reliant',
                'title' => 'Reliant',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            233 => 
            array (
                'id' => 234,
                'slug' => 'renaissance',
                'title' => 'Renaissance',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            234 => 
            array (
                'id' => 235,
                'slug' => 'renault',
                'title' => 'Renault',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:24',
                'updated_at' => '2023-03-23 18:06:24',
            ),
            235 => 
            array (
                'id' => 236,
                'slug' => 'rezvani',
                'title' => 'Rezvani',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            236 => 
            array (
                'id' => 237,
                'slug' => 'rimac',
                'title' => 'Rimac',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            237 => 
            array (
                'id' => 238,
                'slug' => 'rinspeed',
                'title' => 'Rinspeed',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            238 => 
            array (
                'id' => 239,
                'slug' => 'rising-auto',
                'title' => 'Rising Auto',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            239 => 
            array (
                'id' => 240,
                'slug' => 'rivian',
                'title' => 'Rivian',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            240 => 
            array (
                'id' => 241,
                'slug' => 'roewe',
                'title' => 'Roewe',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            241 => 
            array (
                'id' => 242,
                'slug' => 'rolls-royce',
                'title' => 'Rolls-Royce',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            242 => 
            array (
                'id' => 243,
                'slug' => 'ronart',
                'title' => 'Ronart',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            243 => 
            array (
                'id' => 244,
                'slug' => 'rover',
                'title' => 'Rover',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            244 => 
            array (
                'id' => 245,
                'slug' => 'saab',
                'title' => 'Saab',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            245 => 
            array (
                'id' => 246,
                'slug' => 'saipa',
                'title' => 'Saipa',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            246 => 
            array (
                'id' => 247,
                'slug' => 'saleen',
                'title' => 'Saleen',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            247 => 
            array (
                'id' => 248,
                'slug' => 'renault-samsung',
                'title' => 'Renault Samsung',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            248 => 
            array (
                'id' => 249,
                'slug' => 'santana',
                'title' => 'Santana',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            249 => 
            array (
                'id' => 250,
                'slug' => 'saturn',
                'title' => 'Saturn',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            250 => 
            array (
                'id' => 251,
                'slug' => 'scion',
                'title' => 'Scion',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            251 => 
            array (
                'id' => 252,
                'slug' => 'sears',
                'title' => 'Sears',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            252 => 
            array (
                'id' => 253,
                'slug' => 'seat',
                'title' => 'SEAT',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:34',
                'updated_at' => '2023-03-23 18:06:34',
            ),
            253 => 
            array (
                'id' => 254,
                'slug' => 'seres',
                'title' => 'Seres',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            254 => 
            array (
                'id' => 255,
                'slug' => 'shanghai-maple',
                'title' => 'Shanghai Maple',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            255 => 
            array (
                'id' => 256,
                'slug' => 'shuanghuan',
                'title' => 'ShuangHuan',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            256 => 
            array (
                'id' => 257,
                'slug' => 'simca',
                'title' => 'Simca',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            257 => 
            array (
                'id' => 258,
                'slug' => 'skoda',
                'title' => 'Skoda',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            258 => 
            array (
                'id' => 259,
                'slug' => 'skywell',
                'title' => 'Skywell',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            259 => 
            array (
                'id' => 260,
                'slug' => 'smart',
                'title' => 'Smart',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            260 => 
            array (
                'id' => 261,
                'slug' => 'smz',
                'title' => 'СМЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            261 => 
            array (
                'id' => 262,
                'slug' => 'soueast',
                'title' => 'Soueast',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            262 => 
            array (
                'id' => 263,
                'slug' => 'spectre',
                'title' => 'Spectre',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            263 => 
            array (
                'id' => 264,
                'slug' => 'spyker',
                'title' => 'Spyker',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            264 => 
            array (
                'id' => 265,
                'slug' => 'ssangyong',
                'title' => 'SsangYong',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            265 => 
            array (
                'id' => 266,
                'slug' => 'steyr',
                'title' => 'Steyr',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            266 => 
            array (
                'id' => 267,
                'slug' => 'studebaker',
                'title' => 'Studebaker',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            267 => 
            array (
                'id' => 268,
                'slug' => 'subaru',
                'title' => 'Subaru',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            268 => 
            array (
                'id' => 269,
                'slug' => 'suzuki',
                'title' => 'Suzuki',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            269 => 
            array (
                'id' => 270,
                'slug' => 'tagaz',
                'title' => 'ТагАЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            270 => 
            array (
                'id' => 271,
                'slug' => 'talbot',
                'title' => 'Talbot',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            271 => 
            array (
                'id' => 272,
                'slug' => 'tank',
                'title' => 'Tank',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            272 => 
            array (
                'id' => 273,
                'slug' => 'tata',
                'title' => 'TATA',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            273 => 
            array (
                'id' => 274,
                'slug' => 'tatra',
                'title' => 'Tatra',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            274 => 
            array (
                'id' => 275,
                'slug' => 'tazzari',
                'title' => 'Tazzari',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            275 => 
            array (
                'id' => 276,
                'slug' => 'tesla',
                'title' => 'Tesla',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            276 => 
            array (
                'id' => 277,
                'slug' => 'think',
                'title' => 'Think',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            277 => 
            array (
                'id' => 278,
                'slug' => 'tianma',
                'title' => 'Tianma',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            278 => 
            array (
                'id' => 279,
                'slug' => 'tianye',
                'title' => 'Tianye',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            279 => 
            array (
                'id' => 280,
                'slug' => 'tofas',
                'title' => 'Tofas',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            280 => 
            array (
                'id' => 281,
                'slug' => 'toyota',
                'title' => 'Toyota',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:35',
                'updated_at' => '2023-03-23 18:06:35',
            ),
            281 => 
            array (
                'id' => 282,
                'slug' => 'trabant',
                'title' => 'Trabant',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            282 => 
            array (
                'id' => 283,
                'slug' => 'tramontana',
                'title' => 'Tramontana',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            283 => 
            array (
                'id' => 284,
                'slug' => 'triumph',
                'title' => 'Triumph',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            284 => 
            array (
                'id' => 285,
                'slug' => 'trumpchi',
                'title' => 'Trumpchi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            285 => 
            array (
                'id' => 286,
                'slug' => 'tvr',
                'title' => 'TVR',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            286 => 
            array (
                'id' => 287,
                'slug' => 'uaz',
                'title' => 'УАЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            287 => 
            array (
                'id' => 288,
                'slug' => 'ultima',
                'title' => 'Ultima',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            288 => 
            array (
                'id' => 289,
                'slug' => 'vauxhall',
                'title' => 'Vauxhall',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            289 => 
            array (
                'id' => 290,
                'slug' => 'lada-vaz',
            'title' => 'LADA (ВАЗ)',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:39',
                'updated_at' => '2023-03-23 18:06:39',
            ),
            290 => 
            array (
                'id' => 291,
                'slug' => 'vector',
                'title' => 'Vector',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            291 => 
            array (
                'id' => 292,
                'slug' => 'venturi',
                'title' => 'Venturi',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            292 => 
            array (
                'id' => 293,
                'slug' => 'volkswagen',
                'title' => 'Volkswagen',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            293 => 
            array (
                'id' => 294,
                'slug' => 'volvo',
                'title' => 'Volvo',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            294 => 
            array (
                'id' => 295,
                'slug' => 'vortex',
                'title' => 'Vortex',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            295 => 
            array (
                'id' => 296,
                'slug' => 'voyah',
                'title' => 'Voyah',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            296 => 
            array (
                'id' => 297,
                'slug' => 'vuhl',
                'title' => 'VUHL',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            297 => 
            array (
                'id' => 298,
                'slug' => 'wanderer',
                'title' => 'Wanderer',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            298 => 
            array (
                'id' => 299,
                'slug' => 'wartburg',
                'title' => 'Wartburg',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            299 => 
            array (
                'id' => 300,
                'slug' => 'weltmeister',
                'title' => 'Weltmeister',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            300 => 
            array (
                'id' => 301,
                'slug' => 'westfield',
                'title' => 'Westfield',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            301 => 
            array (
                'id' => 302,
                'slug' => 'wey',
                'title' => 'WEY',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            302 => 
            array (
                'id' => 303,
                'slug' => 'wiesmann',
                'title' => 'Wiesmann',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            303 => 
            array (
                'id' => 304,
                'slug' => 'willys',
                'title' => 'Willys',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            304 => 
            array (
                'id' => 305,
                'slug' => 'w-motors',
                'title' => 'W Motors',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            305 => 
            array (
                'id' => 306,
                'slug' => 'xin-kai',
                'title' => 'Xin Kai',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            306 => 
            array (
                'id' => 307,
                'slug' => 'xpeng',
                'title' => 'Xpeng',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            307 => 
            array (
                'id' => 308,
                'slug' => 'yulon',
                'title' => 'Yulon',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            308 => 
            array (
                'id' => 309,
                'slug' => 'zastava',
                'title' => 'Zastava',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            309 => 
            array (
                'id' => 310,
                'slug' => 'zaz',
                'title' => 'ЗАЗ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            310 => 
            array (
                'id' => 311,
                'slug' => 'zeekr',
                'title' => 'Zeekr',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            311 => 
            array (
                'id' => 312,
                'slug' => 'zenos',
                'title' => 'Zenos',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            312 => 
            array (
                'id' => 313,
                'slug' => 'zenvo',
                'title' => 'Zenvo',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            313 => 
            array (
                'id' => 314,
                'slug' => 'zibar',
                'title' => 'Zibar',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            314 => 
            array (
                'id' => 315,
                'slug' => 'zil',
                'title' => 'ЗИЛ',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            315 => 
            array (
                'id' => 316,
                'slug' => 'zis',
                'title' => 'ЗиС',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            316 => 
            array (
                'id' => 317,
                'slug' => 'zotye',
                'title' => 'Zotye',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
            317 => 
            array (
                'id' => 318,
                'slug' => 'zx',
                'title' => 'ZX',
                'priority' => 0,
                'created_at' => '2023-03-23 18:06:40',
                'updated_at' => '2023-03-23 18:06:40',
            ),
        ));
        
        
    }
}