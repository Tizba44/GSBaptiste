<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class TypePraticien extends Model
{
    use HasFactory;

    protected $fillable = [
        'TYP_CODE',
        'TYP_LIBELLE',
        'TYP_LIEU', 
    ];

    protected $table = 'type_praticien';

}