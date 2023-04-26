<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Header::create([
            'image' => 'pic.png',
            'name' => 'Anonymous',
            'interest' => 'Mobile',
            'country' => 'Nusantara',
            'linkedin' => 'linkedin.com',
            'github' => 'github.com',
            'instagram' => 'instagram.com',
            'spotify' => 'spotify.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
