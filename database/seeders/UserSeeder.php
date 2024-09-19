<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Crear un usuario de prueba
        User::create([
            'nombre' => 'César',
            'num_colaborador' => '01370',
            'contraseña' => bcrypt('password123'), // Cambia esta contraseña si lo deseas
            'rol' => 'admin', // Cambia a 'admin' o 'normal'
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Crear usuarios falsos
        for ($i = 0; $i < 10; $i++) { // Cambia 10 por la cantidad de usuarios que desees
            User::create([
                'nombre' => $faker->name,
                'num_colaborador' => $faker->unique()->numberBetween(10000, 99999),
                'contraseña' => bcrypt('password'), // Cambia esta contraseña si lo deseas
                'rol' => $faker->randomElement(['admin', 'normal']), // Asigna rol aleatorio
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}