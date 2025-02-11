<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'E-ticaret V1',
            'content' => 'Hakkımızda',
            'text1icon' =>'icon-truck',
            'text1' =>'Hızlı Teslimat',
            'text1content' =>'Güvenli ulaşım',
            'text2icon' =>'icon-refresh2',
            'text2' =>'İdae',
            'text2content' =>'Memnun kalmadığınız taktirde 30 gün içerisinde iade.',
            'text3icon' =>'icon-help',
            'text3' =>'Destek',
            'text3content'=>'7/24 Hizmetinizdeyiz'
        ]);
    }
}
