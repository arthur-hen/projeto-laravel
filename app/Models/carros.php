<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
    use HasFactory;

    protected $table = 'carros';

    protected $fillable = [
        'marca',
        'modelo',
        'cor',
        'ano_fabricacao',
        'quilometragem',
        'valor',
        'foto1',
        'foto2',
        'foto3',
    ];
}
