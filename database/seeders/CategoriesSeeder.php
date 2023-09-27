<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
       [
        'Name' => 'BreakFast'
       ],
       [
        'Name' => 'Lunch'
       ],
       [
        'Name' => 'Dinner'
       ],

        ];
        Categories::insert($categories);
    }
}
