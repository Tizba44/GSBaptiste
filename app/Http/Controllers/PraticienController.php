<?php

namespace App\Http\Controllers;

use App\Models\Praticien;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PraticienController extends Controller
{
    public function index()
    {
        $praticiens = Praticien::with('typePraticien')->get();

        return Inertia::render('Praticien', ['praticiens' => $praticiens]);
    }


    public function search(Request $request)
    {
        $nom = $request->input('nom');
        $ville = $request->input('ville');
        $type = $request->input('type');

        $praticiens = Praticien::query()
            ->when($nom, function ($query, $nom) {
                return $query->where('PRA_NOM', 'LIKE', "%$nom%");
            })
            ->when($ville, function ($query, $ville) {
                return $query->where('PRA_VILLE', 'LIKE', "%$ville%");
            })
            ->when($type, function ($query, $type) {
                return $query->whereHas('typePraticien', function ($query) use ($type) {
                    $query->where('TYP_LIBELLE', 'LIKE', "%$type%");
                });
            })
            ->with('typePraticien')
            ->get();

        return Inertia::render('Praticien', ['praticiens' => $praticiens]);
    }
}
