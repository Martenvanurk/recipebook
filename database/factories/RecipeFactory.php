<?php

    namespace Database\Factories;

    use App\Models\Recipe;
    use Illuminate\Database\Eloquent\Factories\Factory;

    class RecipeFactory extends Factory
    {
        protected $model = Recipe::class;

        public function definition() : array
        {
            return [
                'title' => $this->faker->sentence(),
                'short_description' => $this->faker->sentences(2, true),
                'long_description' => $this->faker->sentences(4, true),
                'tools' => $this->faker->words(5, true),
                'ingredients' => $this->faker->words(5, true),
                'duration_to_make' => $this->faker->randomNumber(1,100),
                'duration_to_wait' => $this->faker->randomNumber(1, 100),
                'difficulty' => $this->faker->numberBetween(1,5),
                'servings' => $this->faker->randomNumber(1, 10),
                'serving_type_id' => $this->faker->randomNumber(1,5),
            ];
        }
    }
