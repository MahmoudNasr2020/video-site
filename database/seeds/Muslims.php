<?php

use App\Models\Muslim;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker ;
class Muslims extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i =0 ;$i <20 ;$i++)
        {
            $array=[
                'name'=>$faker->name,
                'meta_key'=>$faker->word,
                'meta_desc'=>$faker->word,
            ];
            Muslim::create($array);
        }
    }
}
