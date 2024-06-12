<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use Faker;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(Faker $faker): void {
    public function run(): void {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker\Factory::create('it_IT');
            $newTrain = new Train();
            $newTrain->departure_station = $faker->streetAddress();
            $newTrain->arrival_station = $faker->streetAddress();
            $newTrain->departure_date = $faker->dateTimeBetween('-4 days', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_number = $faker->randomNumber(3, true);
            $newTrain->carriage_number = $faker->randomDigit();
            $newTrain->save();
        }
    }
}
