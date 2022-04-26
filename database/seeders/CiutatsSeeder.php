<?php

namespace Database\Seeders;

use App\Models\Ciutats;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CiutatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciutats::create([
            'nom' => 'Barcelona',
            'n_habitants' => 10000,
        ]);

        Ciutats::create([
            'nom' => 'Badalona',
            'n_habitants' => 1000,
        ]);
    }
}
