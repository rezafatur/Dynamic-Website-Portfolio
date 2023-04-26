<?php

namespace Database\Seeders;

use App\Models\ResumeSummary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResumeSummary::create([
            'name' => 'Anonymous',
            'description' => 'Student of Bina Nusantara University'
        ]);
    }
}
