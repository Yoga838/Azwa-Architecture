<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promoData = [
            [
                'title' => 'Promo Diskon 50%',
                'price' => 50000,
                'actual_price' => 100000,
                'description' => json_encode(['Diskon hingga 50%', 'Berlaku untuk semua kategori', 'Waktu terbatas']),
                'ondisplay' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Promo Cashback',
                'price' => 75000,
                'actual_price' => 150000,
                'description' => json_encode(['Dapatkan cashback hingga 50%', 'Minimal transaksi Rp150.000']),
                'ondisplay' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Promo Spesial Akhir Tahun',
                'price' => 30000,
                'actual_price' => 60000,
                'description' => json_encode(['Harga spesial', 'Hanya berlaku hingga akhir tahun', 'Terbatas']),
                'ondisplay' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('promos')->insert($promoData);
    }
}
