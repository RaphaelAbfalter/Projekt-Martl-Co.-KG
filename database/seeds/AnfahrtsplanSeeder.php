<?php

use Illuminate\Database\Seeder;
use App\Models\Anfahrtsplan;
use Illuminate\Support\Facades\DB;

class AnfahrtsplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anfahrtsplan::create([
            'addressOffice' => 'Wiener Str. 181, 4020 Linz',
            'driveToOffice' => 'Reisen Sie mit dem Auto können Sie über die Autobahn A7 Anreisen, dann bei der Abfahrt Wienerstraße Abfahren und um das WIFI Gebäude rundum fahren, sobald Sie wieder auf der Wienerstraße sind befindet sich das Unternehmen auf der rechten Seite, Parkplätze sind auf der linken Seite',
            'publicTransportToOffice' => 'bei Anreise von Außerhalb von Linz empfiehlt es sich mit dem Zug bis zum Hauptbahnhof zu fahren und dann in die Straßenbahn Nummer 1 oder 2 Richtung Auwiesen oder Solarcity bis zur Station Turmstraße zu fahren. Wenn Sie beim Aussteigen nach rechts schauen sehen Sie direckt das Unternehmensgebäude.',
            'addressWorkshop' => 'Lärchenstraße 17, 4600 Wels',
            'driveToWorkshop' => 'Reisen Sie mit dem Auto können Sie über die Autobahn A8 Anreisen, dann bei der Abfahrt Wels-West Abfahren auf die Salzburgerstraße Richtung XXXLutz, danach rechts abbiegen auf die Noitzmühlstraße, dieser Richtung folgen bis zur Traunaustraße 38, hier links abbiegen, nach 2 Kreuzungen befindet sich die Werkstatt zu Ihrer linken',
            'publicTransportToWorkshop' => 'Lorem Impsum' ]);
    }

}
