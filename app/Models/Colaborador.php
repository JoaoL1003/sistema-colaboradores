<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'setor',
        'cidade',
        'data_checkin',
    ];

    protected $table = 'tasks_table';

    protected $casts = [
    'data_checkin' => 'datetime', // usa datetime porque seu campo tem data e hora
];

}
