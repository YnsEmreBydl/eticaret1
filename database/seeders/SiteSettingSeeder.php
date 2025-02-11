<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteSetting;


class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'adres',
            'data'=> 'Adres bilgileri burada'
        ]);


        SiteSetting::create([
            'name' => 'telefon',
            'data'=> '0555 555 55 55'
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data'=> 'test@gmail.com'
        ]);


        SiteSetting::create([
            'name' => 'harita',
            'data'=> null
        ]);
    }
}
