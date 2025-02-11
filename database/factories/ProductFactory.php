<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categoryId = [1,2,3,4,5,6,7,8,9];
        $sizelist = ['XS','S','M','ML','L','XL','XXL'];
        $color = ['Siyah','Beyaz','Mavi','Kırmızı','Yeşil','Sarı'];

        $colorText = $color[random_int(0,5)];
        $size = $sizelist[random_int(0,6)];
        return [
            'name' => $colorText.' '.$size. ' Ürün',
            'category_id'=>$categoryId[random_int(0,8)],
            'content'=>'Yazıları',
            'shortText'=>$categoryId[random_int(0,8)].' id li ürün',
            'price'=>random_int(100,2000),
            'size'=>$size,
            'color'=>$colorText,
            'quantity'=>1,
            'status'  =>true
        ];
    }
}
