<?php

namespace Database\Seeders;

use App\Models\Casals;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CasalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Casals::create([
            'nom' => 'Casal de Barcelona',
            'data_inici' => Carbon::parse('2022-07-01'),
            'data_final' => Carbon::parse('2022-08-01'),
            'n_places' => 100,
            'id_ciutats' => 1, 
        ]);

        Casals::create([
            'nom' => 'Casal de Badalona',
            'data_inici' => Carbon::parse('2022-07-01'),
            'data_final' => Carbon::parse('2022-08-01'),
            'n_places' => 100,
            'id_ciutats' => 1, 
        ]);

        Casals::create([
            'nom' => 'Casal de Stk',
            'data_inici' => Carbon::parse('2022-07-01'),
            'data_final' => Carbon::parse('2022-08-01'),
            'n_places' => 100,
            'id_ciutats' => 1, 
        ]);
    }
}
