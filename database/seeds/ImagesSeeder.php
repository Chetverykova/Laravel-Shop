<?php

use App\Gallery;
use App\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::all()->each(function ($gallery) {
            $images = factory(Image::class, 4)->create();
            $gallery->images()->saveMany($images);
        });
    }
}
