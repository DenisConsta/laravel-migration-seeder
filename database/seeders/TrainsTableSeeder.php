<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
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
    public function run(Faker $faker)
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

        /* $train = new Train();
        $train->company = 'TestCompany';
        $train->departure_station = 'Trieste';
        $train->arrival_station = 'Verona';
        $train->departure_time = new DateTime('now');
        $train->arrival_time = new DateTime('now');
        $train->train_code = 'ZX132231';
        $train->n_carriages = 22;

        $train->save(); */

        for ($i = 0; $i < 100; $i++){

            $train = new Train();
            $train->company = $faker->words(2, true);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTime()->format('Y-m-d H:i:s');
            $train->arrival_time = $faker->dateTime()->format('Y-m-d H:i:s');
            $train->train_code = $faker->bothify('##???????');
            $train->n_carriages = $faker->numberBetween(1, 100);

            $train->save();
        }



    }
}
