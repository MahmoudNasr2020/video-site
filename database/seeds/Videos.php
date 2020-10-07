<?php

use App\Models\Video;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class Videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $url = [
                'https://www.youtube.com/watch?v=TIhton7vyFc&list=PLYp_Kd32XvcqW5GIocnA-M3DKUK6_7aDa&index=54',
                'https://www.youtube.com/watch?v=lZ-Bdm4HnvE',
                'https://www.youtube.com/watch?v=IEIa9U1ecKM',
                'https://www.youtube.com/watch?v=nNK4es84vxI',
                'https://www.youtube.com/watch?v=_nkexHzMPGs',
                'https://www.youtube.com/watch?v=d_7hffmTZoo',
                'https://www.youtube.com/watch?v=_LymQaT7KFs',
                'https://www.youtube.com/watch?v=Wak0ZFnZB98',
        ];

        $image = [
            '1600862736.jpg',
            '1600862608.jpg',
            '1601174598.jpg',
        ];

        $idTags=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19];

        for($i =0 ;$i <20 ;$i++)
        {
            $array=[
                'name'=>$faker->name,
                'url'=>$url[rand(0,7)],
                'desc'=>$faker->word,
                'status'=>rand(0,1),
                'image'=>$image[rand(0,2)],
                'muslim_id'=>rand(1,20),
                'cat_id'=>rand(1,20),
                'meta_key'=>$faker->word,
                'meta_desc'=>$faker->word,
            ];
            $video=Video::create($array);

            $tags = $video->tags()->sync(array_rand($idTags));
        }
    }
}
