<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'profile' => 'pro.png',
            'cv' => 'assets/data/CV_Muhammad-Reza-Faturrahman.pdf',
            'fullname' => 'Anonymous',
            'age' => '18',
            'degree' => 'Bachelors degree',
            'interest' => 'Frontend Web',
            'phone' => '+6282123503158',
            'email' => 'anonymous@gmail.com',
            'freelance' => 'available',
            'imagefrom' => 'from.png',
            'from' => 'Jakarta, Capital City, Indonesia',
            'imagecurrently' => 'currently.png',
            'currently' => 'Makassar, South Sulawesi, Indonesia'
        ]);
    }
}
