<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_AR'); // crea un faker en español Argentina

        for ($i=0; $i<100; $i++) {
            $nombre = $faker->firstName;
            $nombrecompleto = $nombre.' '.$faker->lastName;
            \App\Persona::create([
                'nombre' => $nombrecompleto,
                'telefono' => $faker->phoneNumber,
                'correo' => $nombre.''.random_int(0,100).'@gmail.com',
                'carnet_identidad' => random_int(1100, 10000),
                'direccion' => $faker->address,
                'tipo' => 2,
            ]);
        }
    }
}
