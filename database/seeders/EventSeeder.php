<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = new Event();
        $event->title = "Wk judo";
        $event->address = 'fagotberg 22';
        $event->zip = '4857WM';
        $event->city = "Breda";
        $event->start_date = '2022-01-12';
        $event->end_date = '2022-02-22';
        $event->description = 'gekke tuigings';
        $event->ticket_price = 30;
        $event->service_costs = 2.50;
        $event->save();

        $event = new Event();
        $event->title = "Wk mensen poppen";
        $event->address = 'fagotberg 27';
        $event->zip = '4857JK';
        $event->city = "Security ";
        $event->start_date = '2022-3-12';
        $event->end_date = '2022-2-15';
        $event->description = 'gekke tuigings';
        $event->ticket_price = 30;
        $event->service_costs = 3.50;
        $event->save();
    }

}
