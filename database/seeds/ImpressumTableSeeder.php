<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImpressumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('impressum')->insert([
            'firmenanschrift' => 'Martl & Co.KG',
            'unternehmensgegenstand' => 'Atomationstechnik',
            'UIDNummer' => 'ATU12345678',
            'GLN' => '1234567891234',
            'GISA' => '12345678',
            'telefonnummer' => '01234/56789',
            'fax' => '01234/56789-0',
            'email' => 'admin@regina-martl.at',
            'adresse' => 'Wienerstrasse 181, 4020 Linz, Österreich',
        ]);
    }
}
