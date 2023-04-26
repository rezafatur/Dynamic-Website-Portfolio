<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'email' => 'anonymous@gmail.com',
            'phone' => '+6282123503158',
            'location' => 'Jakarta, Capital City, Indonesia',
        ]);
    }
}
