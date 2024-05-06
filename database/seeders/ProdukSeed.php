<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = [
            ['image' => 'img/Alat Music/biola.jpg', 'name' => 'Biola', 'categories' => 'Alat Music', 'buyprice' => '1400000','sellprice'=>'1820000','stock'=>'8'],
            ['image' => 'img/Alat Music/drumset.jpg', 'name' => 'Drum Set', 'categories' => 'Alat Music', 'buyprice' => '2200000','sellprice'=>'2860000','stock'=>'5'],
            ['image' => 'img/Alat Music/gitar akustik.jpg', 'name' => 'Gitar Akustik', 'categories' => 'Alat Music', 'buyprice' => '1000000','sellprice'=>'1300000','stock'=>'10'],
            ['image' => 'img/Alat Music/pianoelektrik.jpg', 'name' => 'Piano Elektrik', 'categories' => 'Alat Music', 'buyprice' => '3000000','sellprice'=>'3900000','stock'=>'3'],
            ['image' => 'img/Alat Olahraga/bolabasket.png', 'name' => 'Bola Basket', 'categories' => 'Alat Olahraga', 'buyprice' => '60000','sellprice'=>'78000','stock'=>'40'],
            ['image' => 'img/Alat Olahraga/dumbell5kg.jpg', 'name' => 'Dumbell 5KG', 'categories' => 'Alat Olahraga', 'buyprice' => '80000','sellprice'=>'104000','stock'=>'25'],
            ['image' => 'img/Alat Olahraga/jerseyliverpool.jpg', 'name' => 'Jersey Liverpool', 'categories' => 'Alat Olahraga', 'buyprice' => '150000','sellprice'=>'1625000','stock'=>'120'],
            ['image' => 'img/Alat Olahraga/raketbadminton.jpg', 'name' => 'Raket Badminton', 'categories' => 'Alat Olahraga', 'buyprice' => '100000','sellprice'=>'135000','stock'=>'35'],
            ['image' => 'img/Alat Olahraga/sepatulari.png', 'name' => 'Sepatu Lari', 'categories' => 'Alat Olahraga', 'buyprice' => '200000','sellprice'=>'260000','stock'=>'20'],
            ['image' => 'img/Alat Olahraga/treadmill.jpg', 'name' => 'Treadmill', 'categories' => 'Alat Olahraga', 'buyprice' => '2000000','sellprice'=>'2600000','stock'=>'7'],
            ['image' => 'img/Alat Olahraga/yogamat.jpg', 'name' => 'Yoga Mat', 'categories' => 'Alat Olahraga', 'buyprice' => '120000','sellprice'=>'156000','stock'=>'30'],
        ];

        Produk::insert($produk);
    }
}

