<?php

namespace Database\Seeders;

use App\Models\ItemValue;
use Illuminate\Database\Seeder;

class ItemValueSeeder extends Seeder
{
    public function run(): void
    {
        ItemValue::factory()
            ->count(50)
            ->create();
    }
}
