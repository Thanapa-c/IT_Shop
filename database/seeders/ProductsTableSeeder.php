<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['name' => 'ชาไทย',
            'cost' => "17",
            'price' => "20",
            'qty' => "1",
            'image_url'=> 'https://th.bing.com/th/id/OIP.PuUjMUNFFBgigLmrvN5ZcAHaHS?rs=1&pid=ImgDetMain',
            'product_type_id'=>'2',
            ],
            
            
            ['name' => 'ชามะลิ',
            'cost' => "35",
            'price' => "40",
            'qty' => "1",
            'image_url'=> 'https://static.toiimg.com/thumb/msid-109245506,width-1280,height-720,resizemode-4/109245506.jpg',
            'product_type_id'=>'2',
            ],
        ];
        DB::table('products')->insert($data);
    }
}
