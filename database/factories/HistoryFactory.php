<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patients_id' => random_int(1,10),
            'coming_time' => Carbon::now(),
            'medicine' => 'obat '. random_int(1,10),
            'capsul_color' => $this->faker->randomElement(['Merah', 'Kuning', 'Hijau']),
            'status' => $this->faker->randomElement(['Selesai', 'Menunggu']),
            'price' => random_int(100000, 900000),
        ];
    }
}
