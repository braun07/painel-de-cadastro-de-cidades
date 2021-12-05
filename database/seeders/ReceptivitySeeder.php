<?php

namespace Database\Seeders;

use App\Models\Receptivity;
use Illuminate\Database\Seeder;

class ReceptivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Receptivity::upsert([
            [
                'id' => 1,
                'name' => 'Esperaça',
                ],
                [
                    'id' => 2,
                    'name' => 'ganho',
                ],
                [
                    'id' => 3,
                    'name' => 'perda',
                ],
            ], 'id'
        );
    }
}
