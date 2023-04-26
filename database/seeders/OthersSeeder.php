<?php

namespace Database\Seeders;

use App\Models\Others;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OthersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Others::create([
            'pagename' => 'anonymous',
            'navbarname' => 'anonymous',
            'copyrightname' => 'anonymous',
        ]);
    }
}
