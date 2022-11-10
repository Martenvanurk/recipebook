<?php

namespace Database\Seeders;

    use App\Models\ServingType;
    use Database\Factories\ServingTypeFactory;
    use Illuminate\Database\Seeder;

    class ServingTypeSeeder extends Seeder
    {
        public function run()
        {
            ServingType::factory()
                ->count(10)
                ->create();
        }
    }
