<?php

namespace Database\Factories;

use App\Models\ActivityType;
use App\Models\Contact;
use App\Models\Receptivity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time' => $this->faker->dateTimeBetween('tomorrow', 'last day of +2 month'),
            'description' => $this->faker->text(250),
            'pendencies' => $this->faker->text(250),
            'activity_type_id' => ActivityType::inRandomOrder()->value('id'),
            'receptivity_id' => Receptivity::inRandomOrder()->value('id'),
        ];
    }
    public function contact(): Factory
    {
        return $this->state(fn () => [
            'contact_id' => Contact::factory()->cityHall(),
        ]);
    }
}
