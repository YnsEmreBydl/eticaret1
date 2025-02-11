<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Urun 1',
            'category_id' => 2,
            'content' => 'Kaliteli elbise',
            'shortText' =>'kısa bilgi',
            'price' =>500,
            'size' =>'Medium',
            'image' =>'https://ltbjeans-hybris-p1.mncdn.com/mnresize/790/1059/media/products/0112510034512540000_200_1.jpg',
            'color' =>'Black',
            'quantity' => 1,
            'status'=> 1

        ]);


        Product::create([
            'name' => 'Urun 2',
            'category_id' => 1,
            'content' => 'Kaliteli elbise2',
            'shortText' =>'kısa bilgi2',
            'price' =>500,
            'size' =>'Large',
            'image' =>'https://akn-gant.a-cdn.akinoncloud.com/products/2020/08/12/13905/b7e9192d-b0b8-4768-be0a-a358289d1c0a_size1000x1300_quality100.jpg',
            'color' =>'White',
            'quantity' => 1,
            'status'=> 1

        ]);

        Product::create([
            'name' => 'Urun 3',
            'category_id' => 1,
            'content' => 'Kaliteli elbise3',
            'shortText' =>'kısa bilgi3',
            'price' =>1500,
            'size' =>'Small',
            'image' =>'https://akn-gant.a-cdn.akinoncloud.com/products/2020/08/12/13905/b7e9192d-b0b8-4768-be0a-a358289d1c0a_size1000x1300_quality100.jpg',
            'color' =>'White',
            'quantity' => 1,
            'status'=> 1

        ]);
    }
}
