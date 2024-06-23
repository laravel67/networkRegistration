<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftar>
 */
class DaftarFactory extends Factory
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
            'gender' => $this->faker->randomElement(['L', 'P']),
            'tmptLahir' => $this->faker->city,
            'tglLahir' => $this->faker->date(),
            'kecamatan' => $this->faker->city,
            'kelurahan' => $this->faker->city,
            'alamat' => $this->faker->address,
            'luas' => $this->faker->randomFloat(2, 10, 1000),
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
