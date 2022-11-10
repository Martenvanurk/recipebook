<?php

    namespace Database\Factories;

    use App\Models\ServingType;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class ServingTypeFactory extends Factory
    {
        protected $model = ServingType::class;

        public function definition() : array
        {
            return [
                'name' => $this->faker->name()
            ];
        }
    }
