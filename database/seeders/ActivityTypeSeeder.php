<?php

namespace Database\Seeders;

use App\Models\ActivityType;
use Illuminate\Database\Seeder;

class ActivityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActivityType::upsert([
            [
                'id' => 1,
                'name' => 'Telefonema',
                ],
                [
                    'id' => 2,
                    'name' => 'E-mail',
                ],
                [
                    'id' => 3,
                    'name' => 'Visita',
                ],
            ], 'id'
        );
    }
}
