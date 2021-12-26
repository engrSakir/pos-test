<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create(['name' => 'সকালের নাস্তা', 'online' => true]);
        ProductCategory::create(['name' => 'দুপুরের ও রাতের খাবার', 'online' => true]);
        ProductCategory::create(['name' => 'ডেজার্ট', 'online' => true]);
        ProductCategory::create(['name' => 'লাচ্ছি/ফালুদা/জুস', 'online' => true]);
        ProductCategory::create(['name' => 'বিকালের নাস্তা', 'online' => true]);








    }
}
