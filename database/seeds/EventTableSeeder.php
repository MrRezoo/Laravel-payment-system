<?php

use Illuminate\Database\Seeder;
use \App\Event;
class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class,10)->create();
    }
}
