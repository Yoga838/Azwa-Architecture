<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paketData = [
            [
                'category' => 'Basic',
                'tier' => 'Silver',
                'price' => 100000,
                'description' => json_encode(['Feature 1', 'Feature 2', 'Feature 3']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Standard',
                'tier' => 'Gold',
                'price' => 200000,
                'description' => json_encode(['Feature A', 'Feature B', 'Feature C']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category' => 'Premium',
                'tier' => 'Platinum',
                'price' => 500000,
                'description' => json_encode(['Feature X', 'Feature Y', 'Feature Z']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pakets')->insert($paketData);
    }
}
