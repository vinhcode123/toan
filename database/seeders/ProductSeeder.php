<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'Name' => 'Lẩu Bò',
                'Description'=> 'This is LauBo',
                 'Price' => 250,
                 'Image'=> 'menu-1.jpg',
                 'Category_id' => 1


            ],
            [
                'Name' => 'Bò Bít Tết',
                'Description'=> 'This is BoBitTet',
                 'Price' => 150,
                 'Image'=> 'menu-2.jpg',
                 'Category_id' => 1


            ],
            [
                'Name' => 'Gà Chiên',
                'Description'=> 'This is GaChien',
                 'Price' => 237,
                 'Image'=> 'menu-3.jpg',
                 'Category_id' => 1


            ],
            [
                'Name' => 'Salad',
                'Description'=> 'This is Salad',
                 'Price' => 110,
                 'Image'=> 'menu-4.jpg',
                 'Category_id' => 1


            ],
            [
                'Name' => 'Canh chua',
                'Description'=> 'This is Canh chua',
                 'Price' => 100,
                 'Image'=> 'menu-5.jpg',
                 'Category_id' => 2


            ],
            [
                'Name' => 'Khoai tây + Thịt',
                'Description'=> 'This is Khoai tây + Thịt',
                 'Price' => 423,
                 'Image'=> 'menu-6.jpg',
                 'Category_id' => 2


            ],
            [
                'Name' => 'Trứng + Thịt Heo',
                'Description'=> 'This is Trứng + Thịt Heo',
                 'Price' => 423,
                 'Image'=> 'menu-7.jpg',
                 'Category_id' => 2


            ],
            [
                'Name' => 'Bánh cuốn',
                'Description'=> 'This is BAnhCuon',
                 'Price' => 423,
                 'Image'=> 'menu-8.jpg',
                 'Category_id' => 2


            ],
            [
                'Name' => 'Súp bong bóng ',
                'Description'=> 'This is SupBongBong',
                 'Price' => 423,
                 'Image'=> 'menu-9.jpg',
                 'Category_id' => 3


            ],
            [
                'Name' => 'Gỏi ',
                'Description'=> 'This is Goi',
                 'Price' => 423,
                 'Image'=> 'menu-10.jpg',
                 'Category_id' => 3


            ],
            [
                'Name' => 'Tôm Alaska ',
                'Description'=> 'This is Tôm Alaska',
                 'Price' => 423,
                 'Image'=> 'menu-11.jpg',
                 'Category_id' => 3


            ],
            [
                'Name' => 'Rau Cải ',
                'Description'=> 'This is RauCai',
                 'Price' => 423,
                 'Image'=> 'menu-12.jpg',
                 'Category_id' => 3


            ]
        ];
        Products::insert($products);
    }
}
