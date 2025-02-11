<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $kadin = Category::create([
            'image'    =>  null,
            'thumbnail'     => null,
            'cat_ust'     => null,
            'name'      => 'Kadın',
            'content'   => 'Kadın Giyim',
            'status'    => '1'
        ]);

        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $kadin->id,
            'name'      => 'Elbise',
            'content'   => 'Kışlık Modeller',
            'status'    => '1'
        ]);

        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $kadin->id,
            'name'      => 'Deri Çanta',
            'content'   => 'Çantalar',
            'status'    => '1'
        ]);

        $cocuk = Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => null,
            'name'      => 'Çocuk',
            'content'   => 'Çocuk Giyim',
            'status'    => '1'
        ]);

        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $cocuk->id,
            'name'      => 'Eldiven',
            'content'   => 'Kışlık Modeller',
            'status'    => '1'
        ]);

        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $cocuk->id,
            'name'      => 'Araba',
            'content'   => 'Oyuncaklar',
            'status'    => '1'
        ]);

        $erkek = Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => null,
            'name'      => 'Erkek',
            'content'   => 'Erkek Giyim',
            'status'    => '1'
        ]);

        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $erkek->id,
            'name'      => 'Kazak',
            'content'   => 'Kışlık Modeller',
            'status'    => '1'
        ]);
        
        Category::create([
            'image'     => null,
            'thumbnail'     => null,
            'cat_ust'     => $erkek->id,
            'name'      => 'Kundura',
            'content'   => 'Ayakkabılar',
            'status'    => '1'
        ]);

      
    }
}
