<?php

namespace Database\Seeders;

use App\Models\Cartoon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartoonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/cartoons/cartoons2D');
        $data = json_decode($data);
        // dump($data);
        foreach ($data as $cartoon) {
            $new_cartoon = new Cartoon();
            $new_cartoon->title = $cartoon->title;
            $new_cartoon->slug = Cartoon::generateSlug($new_cartoon->title);
            $new_cartoon->year = $cartoon->year;
            $new_cartoon->creator = implode(', ', data_get($cartoon, 'creator'));
            $new_cartoon->rating = $cartoon->rating;
            $new_cartoon->genre = implode(', ', data_get($cartoon, 'genre'));
            $new_cartoon->runtime_in_minutes = $cartoon->runtime_in_minutes;
            $new_cartoon->episodes = $cartoon->episodes;
            $new_cartoon->image = $cartoon->image;
            $new_cartoon->save();
        }
    }
}
