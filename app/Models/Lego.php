<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lego extends Model
{
    use HasFactory;
    protected $table = 'legos';
    protected $primaryKey = 'numero';

    protected $fillable = [
        'numero',
        'nombre',
        'tema',
        'precio',
        'cantidad',
    ];

}
