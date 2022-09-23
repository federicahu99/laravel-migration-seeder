<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i++) {
            $new_train= new Train();
            $new_train->company = $faker->company();
            $new_train->from = $faker->city();
            $new_train->to = $faker->city();
            $new_train->departure = $faker->time();
            $new_train->arrival = $faker->time();
            $new_train->train_code = $faker->ean8();
            $new_train->coach = $faker->randomDigitNotNull();
            $new_train->delay = $faker->boolean();
            $new_train->cancelled = $faker->boolean();

            $new_train->save();

        }
    }
}
