<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CampGear;

class CampGearSeeder extends Seeder
{
    public function run(): void
    {
        $gears = [
            ['name' => 'Tenda Dome 6 Person', 'category' => 'Tenda', 'price' => 85000, 'image' => 'gear1.jpg', 'desc' => 'Tenda kapasitas 6 orang waterproof tahan angin dan hujan lebat.'],
            ['name' => 'Carrier 60 Liter Premium', 'category' => 'Tas Carrier', 'price' => 65000, 'image' => 'gear2.jpg', 'desc' => 'Tas gunung kapasitas 60L ergonomis dengan busa tebal.'],
            ['name' => 'Trekking Pole Carbon', 'category' => 'Aksesoris', 'price' => 35000, 'image' => 'gear3.jpg', 'desc' => 'Tongkat pendaki fleksibel ringan penyangga beban tubuh.'],
            ['name' => 'Kompor Portable Mini', 'category' => 'Kompor', 'price' => 25000, 'image' => 'gear4.jpg', 'desc' => 'Kompor camping praktis mudah dibawa menggunakan gas kaleng.'],
            ['name' => 'Gelas Lipat Stainless Steel', 'category' => 'Peralatan Makan dan Minuman', 'price' => 20000, 'image' => 'gear5.jpg', 'desc' => 'Gelas lipat tahan karat untuk keperluan camping.'],
            ['name' => 'Set Sendok Garpu Pisau Lipat', 'category' => 'Peralatan Makan dan Minuman', 'price' => 15000, 'image' => 'gear6.jpg', 'desc' => 'Set peralatan makan lipat praktis untuk keperluan camping.'],
            ['name' => 'Jaket', 'category' => 'Pakaian', 'price' => 40000, 'image' => 'gear7.jpg', 'desc' => 'Jaket tahan air dan angin untuk aktivitas outdoor.'],
            ['name' => 'Topi', 'category' => 'Aksesoris', 'price' => 30000, 'image' => 'gear8.jpg', 'desc' => 'Topi pelindung matahari dengan bahan breathable.'],
            ['name' => 'Sarung Tangan', 'category' => 'Aksesoris', 'price' => 30000, 'image' => 'gear9.jpg', 'desc' => 'Sarung tangan pelindung tangan saat aktivitas outdoor.'],
            ['name' => 'Lampu Lentera LED', 'category' => 'Penerangan', 'price' => 25000, 'image' => 'gear10.jpg', 'desc' => 'Lampu lentera LED terang waterproof dengan fitur powerbank.'],
            ['name' => 'Flysheet 3x4 Meter', 'category' => 'Tenda', 'price' => 30000, 'image' => 'gear11.jpg', 'desc' => 'Atap peneduh pelindung hujan dan terik matahari.'],
            ['name' => 'Kacamata', 'category' => 'Aksesoris', 'price' => 20000, 'image' => 'gear12.jpg', 'desc' => 'Kacamata pelindung matahari dengan lensa tahan gores.'],
        ];

        foreach ($gears as $item) {
            CampGear::create([
                'name'        => $item['name'],
                'category'    => $item['category'],
                'rent_price'  => $item['price'],
                'stock'       => rand(5, 15),
                'image'       => $item['image'],
                'description' => $item['desc'],
            ]);
        }
    }
}