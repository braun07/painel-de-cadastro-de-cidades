<?php

namespace Database\Factories;

use App\Models\CityHall;
use App\Models\ContactType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'term' => now(),
            'contact_type_id' => ContactType::inRandomOrder()->value('id'),
        ];
    }

    public function cityHall(): Factory
    {
        return $this->state(fn () => [
            'city_hall_id' => CityHall::factory()->city(),
        ]);
    }
}
