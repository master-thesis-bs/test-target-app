<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            'name' => 'Bitwa pod Grunwaldem',
            'description' => 'Bitwa pomiedzy Rzeczpostpolita a Zakonem Krzyzackim',
            'start_date' => '1410-07-15',
            'end_date' => '1410-07-20',
            'image_link' => 'https://chwalazapomniana.pl/wp-content/uploads/2020/07/Wojciech_Kossak_Dwa_miecze.jpg',
            'user_id' => 1,
            'category_id' => 1
        ]);

        DB::table('events')->insert([
            'name' => 'Bitwa pod Kircholmem',
            'description' => 'Przyczyna bitwy byly zmagania o dominium Maris Baltici. ',
            'start_date' => '1605-07-15',
            'end_date' => '1605-07-20',
            'image_link' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Kirholm_1605_I.JPG/480px-Kirholm_1605_I.JPG',
            'user_id' => 1,
            'category_id' => 1
        ]);

        DB::table('events')->insert([
            'name' => 'Powstanie styczniowe',
            'description' => 'Polskie powstanie przeciwko Imperium Rosyjskiemu',
            'start_date' => '1863-01-22',
            'end_date' => '1863-10-20',
            'image_link' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Coat_of_arms_of_the_January_Uprising.svg/2560px-Coat_of_arms_of_the_January_Uprising.svg.png',
            'user_id' => 1,
            'category_id' => 1
        ]);

        DB::table('events')->insert([
            'name' => 'Operacja Barbarossa',
            'description' => 'Atak Niemiec na ZSRR, niemiecki kryptonim operacja Barbarossa ',
            'start_date' => '1941-06-22',
            'end_date' => '1941-05-12',
            'image_link' => 'https://upload.wikimedia.org/wikipedia/commons/3/36/Operation_Barbarossa_corrected_border.png',
            'user_id' => 1,
            'category_id' => 2
        ]);

        DB::table('events')->insert([
            'name' => 'Bitwa o Anglie',
            'description' => 'kampania powietrzna glownie nad poludniową i centralna Anglia',
            'start_date' => '1940-07-10',
            'end_date' => '1940-10-31',
            'image_link' => 'https://upload.wikimedia.org/wikipedia/commons/8/82/Heinkel_He_111_during_the_Battle_of_Britain.jpg',
            'user_id' => 1,
            'category_id' => 2
        ]);

        DB::table('events')->insert([
            'name' => 'Okragly Stol',
            'description' => 'Negocjacje prowadzone przez przedstawicieli wladz Polskiej Rzeczypospolitej Ludowej, demokratycznej opozycji oraz stron koscielnych',
            'start_date' => '1989-02-05',
            'end_date' => '1989-02-06',
            'image_link' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Okr%C4%85g%C5%82y_St%C3%B3%C5%82_Pa%C5%82ac_Prezydencki_w_Warszawie_2019.jpg/480px-Okr%C4%85g%C5%82y_St%C3%B3%C5%82_Pa%C5%82ac_Prezydencki_w_Warszawie_2019.jpg',
            'user_id' => 1,
            'category_id' => 3
        ]);
    }
}
