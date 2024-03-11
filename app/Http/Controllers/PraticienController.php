<?php

namespace App\Http\Controllers;

use App\Models\Praticien;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PraticienController extends Controller
{
    public function index()
    {
        $praticiens = Praticien::all();
        return Inertia::render('Praticien', ['praticiens' => $praticiens]);
    }

    public function search(Request $request)
    {
        $nom = $request->input('nom');
        $ville = $request->input('ville');

        $praticiens = Praticien::query()
            ->when($nom, function ($query, $nom) {
                return $query->where('PRA_NOM', 'LIKE', "%$nom%");
            })
            ->when($ville, function ($query, $ville) {
                return $query->where('PRA_VILLE', 'LIKE', "%$ville%");
            })
            ->get();

        return Inertia::render('Praticien', ['praticiens' => $praticiens]);
    }
}
