<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            'MALE',
            'FEMALE',
            'DIVERSE',
        ];

        foreach ($genders as $gender) {
            Gender::firstOrCreate(['type' => $gender]);
        }
    }
}
