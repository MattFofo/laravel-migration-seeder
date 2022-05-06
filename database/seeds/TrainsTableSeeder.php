<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $trains = [
        //     [
        //
        //         'azienda' => 'Trenitalia',
        //         'stazione_di_partenza'  => 'Verona',
        //         'stazione_di_arrivo'    => 'Padova',
        //         'orario_di_partenza'    => '12:30:00',
        //         'orario_di_arrivo'      => '13:10:00',
        //         'codice_treno'          => '52449',
        //         'numero_di_carrozze'    =>  '12',
        //         'in_orario'             =>  true,
        //         'cancellato'            =>  false
        //     ],
        //     [
        //
        //         'azienda' => 'Trenitalia',
        //         'stazione_di_partenza'  => 'Verona',
        //         'stazione_di_arrivo'    => 'Padova',
        //         'orario_di_partenza'    => '12:30:00',
        //         'orario_di_arrivo'      => '13:10:00',
        //         'codice_treno'          => '52449',
        //         'numero_di_carrozze'    =>  '12',
        //         'in_orario'             =>  true,
        //         'cancellato'            =>  false
        //     ],
        //     [
        //
        //         'azienda' => 'Trenitalia',
        //         'stazione_di_partenza'  => 'Verona',
        //         'stazione_di_arrivo'    => 'Padova',
        //         'orario_di_partenza'    => '12:30:00',
        //         'orario_di_arrivo'      => '13:10:00',
        //         'codice_treno'          => '52449',
        //         'numero_di_carrozze'    =>  '12',
        //         'in_orario'             =>  true,
        //         'cancellato'            =>  false
        //     ]
        // ];

        for ($i=0; $i < 250; $i++) {
            $train = new Train();
            $train->azienda = $faker->word;
            $train->stazione_di_partenza = $faker->city;
            $train->stazione_di_arrivo = $faker->city;
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->data_partenza = $faker->dateTimeThisYear();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_di_carrozze = $faker->numberBetween(5, 15);
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);

            $train->save();
        }

    }
}
