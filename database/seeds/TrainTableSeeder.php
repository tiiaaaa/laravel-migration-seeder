<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i ++){
            $newTrain = new Train();
            $newTrain->agency = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_date = $faker->date();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->url_immage = $faker->imageUrl(400, 300, 'trains', true);
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->train_wagons = $faker->randomNumber(2, false);
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->was_deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}
