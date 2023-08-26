<?php

namespace Database\Factories;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offre>
 */
class OffreFactory extends Factory
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
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'lien_visio' =>$this->faker->url,
            'date_publication' => $this->faker->date,
            'date_expiration' => $this->faker->date,
            'entreprise_id' =>  $this-> faker->randomElement($entreprise_id),       
         ];
    }
}
