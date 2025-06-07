<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

public function run(): void
{
    // Apaga todos os usuários
    User::truncate();

    // Cria o usuário correto
    User::create([
        'name' => 'Administrador',
        'email' => 'admin@evento.com',
        'password' => Hash::make('senhaSegura123'),
    ]);
}
}
