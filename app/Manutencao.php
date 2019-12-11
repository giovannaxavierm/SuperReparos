<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    protected $table="manutencao";

    protected $fillable = [
        'cliente',
        'tecnico',
        'problema',
        'fonecliente',
    ];

    public $primaryKey = 'id';
}
