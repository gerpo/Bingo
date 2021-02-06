<?php

namespace Database\Seeders;

use App\Models\ItemValue;
use Illuminate\Database\Seeder;

class ItemValueSeeder extends Seeder
{
    public function run(): void
    {
        ItemValue::factory()
            ->count(5000)
            ->create();
    }
}
