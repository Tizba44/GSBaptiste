<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praticien extends Model
{
    use HasFactory;

    protected $fillable = [
        'PRA_NUM',
        'PRA_NOM',
        'PRA_PRENOM',
        'PRA_ADRESSE',
        'PRA_CP',
        'PRA_VILLE',
        'PRA_COEFNOTORIETE',
        'TYP_CODE',
    ];

    protected $table = 'praticien';

    // Ajoutez cette méthode pour définir la relation
    public function typePraticien()
    {
        return $this->belongsTo(TypePraticien::class, 'TYP_CODE', 'TYP_CODE');
    }
}
