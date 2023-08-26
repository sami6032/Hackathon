<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'photo' => $this->faker->imageUrl(), // Génération d'une URL d'image factice
            'numero' => $this->faker->phoneNumber,
            'video' => $this->faker->url, // Génération d'une URL factice pour la vidéo
            'cv' => $this->faker->url,
            'realisation' =>$this->faker->sentence,
            'email_verified_at' => now(), // Valeur par défaut pour la vérification de l'email
            'is_admin' => $this->faker->boolean(10), // Probabilité de 10% d'être un administrateur
            'password' => bcrypt('password'), // Vous pouvez modifier ceci en fonction de vos besoins
            'remember_token' => Str::random(10), // Génération d'une chaîne aléatoire pour le remember token
            'created_at' => $this->faker->dateTimeBetween('-2 years', 'now'), // Date de création aléatoire dans les 2 dernières années
            'updated_at' => now(), 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
