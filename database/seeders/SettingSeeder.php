<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::query()->create([
            'name' => "Photoline",
            'email' => "photoline@gmail.com",
            'phone' => "+91 7567253104",
            'address' => "Surat",
            'image' => 'logo.png',
        ]);
    }
}
