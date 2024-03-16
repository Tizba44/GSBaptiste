<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportVisite extends Model
{
    use HasFactory;

    protected $fillable = [
        'VIS_MATRICULE',
        'RAP_NUM',
        'PRA_NUM',
        'RAP_DATE',
        'RAP_BILAN',
        'RAP_MOTIF',
        'RAP_MEDICAMENT',
        'users_id'
    ];
  // Ajoutez cette méthode pour définir la relation avec medicament et praticien
    public function medicament()
    {
        return $this->belongsTo(Medicament::class, 'RAP_MEDICAMENT', 'MED_DEPOTLEGAL');
    }

    public function praticien()
    {
        return $this->belongsTo(Praticien::class, 'PRA_NUM', 'PRA_NUM');
    }



    protected $table = 'rapport_visite';

}
