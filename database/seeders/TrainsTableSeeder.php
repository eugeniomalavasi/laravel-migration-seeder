<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {
        $newTrain = new Train();
        $newTrain->departure_station= $faker->streetAddress();
        $newTrain->arrival_station = $faker->streetAddress();
        $newTrain->departure_date = $faker->date();
        // $newTrain->arrival_date = $faker->date();
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->train_number = $faker->randomNumber(5, true);
        $newTrain->carriage_number = $faker->randomDigit();
        $newTrain->save();
    }
}