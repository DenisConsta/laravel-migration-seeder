<?php

namespace Database\Seeders;

use App\Models\Train;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            $table->id();
            $table->string('company', 150);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 10);
            $table->tinyInteger('n_carriages')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        */

        $train = new Train();
        $train->company = 'TestCompany';
        $train->departure_station = 'Trieste';
        $train->arrival_station = 'Verona';
        $train->departure_time = new DateTime('now');
        $train->arrival_time = new DateTime('now');
        $train->train_code = 'ZX132231';
        $train->n_carriages = 22;

        $train->save();
    }
}
