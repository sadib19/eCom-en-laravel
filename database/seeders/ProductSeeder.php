<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8GB RAM and much more features",
                "category"=>"mobile",
                "gallery"=>"https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a15/navigation/A15-navigation-black-v2.png.thumb.webp",
            ],
            [
                'name'=>'Panasonic TV',
                "price"=>"400",
                "description"=>"A smart TV with much more features",
                "category"=>"tv",
                "gallery"=>"https://www.lg.com/eg_en/images/tvs/md06123439/gallery/43LM5500PVA-M1v.jpg",
            ],
            [
                'name'=>'Sony TV',
                "price"=>"500",
                "description"=>"A TV with much more features",
                "category"=>"tv",
                "gallery"=>"https://www.lifewire.com/thmb/s1WUa9_cpciSGMTmODj496mSjAk=/1500x1000/filters:fill(auto,1)/Samsung-UN32N5300AFXZA-1080p-LED-LCD-Smart-TV-5b421594c9e77c0054c1f861.jpg",
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more features",
                "category"=>"fridge",
                "gallery"=>"https://www.lg.com/my/images/refrigerators/md07530773/gallery/1100_13.jpg",
            ]

        ]);
    }
}
