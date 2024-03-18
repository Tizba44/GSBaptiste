<?php

namespace App\Http\Controllers;

use App\Models\Praticien;
use App\Models\Medicament;
use App\Models\RapportVisite;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Dompdf\Dompdf;

class CompteRenduController extends Controller
{
    public function index()
    {
        $praticiens = Praticien::with('typePraticien')->get();
        $medicaments = Medicament::all();
        $rapports = RapportVisite::with('praticien', 'medicament')->where('users_id', auth()->user()->id)->get();
        return Inertia::render('CompteRendu', [
            'praticiens' => $praticiens,
            'medicaments' => $medicaments,
            'rapports' => $rapports,
        ]);
    }

    // Ajoutez cette méthode pour enregistrer un rapport de visite
    public function store(Request $request)
    {
        $request->validate([
            'praticien' => 'required',
            'date' => 'required',
            'bilan' => 'required',
            'medicament' => 'required',
        ]);
        RapportVisite::create([
            'PRA_NUM' => $request->praticien,
            'RAP_DATE' => $request->date,
            'RAP_BILAN' => $request->bilan,
            'RAP_MOTIF' => $request->motif,
            'RAP_MEDICAMENT' => $request->medicament,
            // envoyer l'id de l'user connecté
            'users_id' => auth()->user()->id,

        ]);
        return redirect()->route('compteRendu.index');
    }
    public function download($id)
    {
        $rapport = RapportVisite::with('praticien', 'medicament')->where('id', $id)->first();
        $pdf = new Dompdf();
        $pdf->loadHtml(view('pdf', compact('rapport')));
        $pdf->render();
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
