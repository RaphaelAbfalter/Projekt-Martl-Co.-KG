<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AnfahrtsplanSeeder::class);
        $this->call(ImpressumTableSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(NewsletterSeeder::class);
        $this->call(SubscriberSeeder::class);
    }
}
