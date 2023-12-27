<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class PraticienController extends Controller
{

    // afficher view vue js 
    public function praticien()
    {
        return Inertia::render('Praticien');
    }
}
