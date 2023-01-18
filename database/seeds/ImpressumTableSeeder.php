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
            'firmenanschrift' => 'Example Street 12, 12345 City',
            'unternehmensgegenstand' => 'Example Business',
            'UIDNummer' => '12345678',
            'GLN' => '876543210',
            'GISA' => '987654321',
            'telefonnummer' => '+1234567890',
            'fax' => '+0987654321',
            'email' => 'example@example.com',
            'adresse' => 'Example Street 12, 12345 City',
        ]);
    }
}
