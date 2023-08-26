<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $entreprise_id= Entreprise::pluck('id');

        return [
            'nom_service' =>$this->faker->word,
            'description' => $this->faker->sentence,
            'avantage' =>$this->faker->sentence,
            'differenciation' => $this->faker->sentence,
            'entreprise_id' => $this-> faker->randomElement($entreprise_id),
        ];
    }
}
