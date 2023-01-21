<?php

namespace Database\Factories;

use App\Models\Resi;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResiFactory extends Factory
{
    protected $model = Resi::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_resi' => $this->faker->randomNumber(),
            'pembuatan' => $this->faker->sentence(4, true),
            'desa' => $this->faker->city(),
            'tanggal_resi' => $this->faker->dateTime('now'),
            'created_at' => now(),
        ];
    }
}
