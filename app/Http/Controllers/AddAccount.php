<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Validator;


class AddAccount extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('AddAccount');
    }

    public function importcsv(Request $request): RedirectResponse

    {

        $file = $request->file('csvFile');
        $path = $file->getRealPath();

        // a partir de store qui est la méthode pour crée un compte a la main  continue importcsv qui crée des comptes a partir d'un fichier csv
        $data = array_map('str_getcsv', file($path));

        foreach ($data as $row) {
            $user = User::create([
                'email' => $row[0],
                'password' => Hash::make($row[1]),
                'VIS_NOM' => $row[2],
                'VIS_PRENOM' => $row[3],
                'VIS_ADRESSE' => $row[4],
                'VIS_CP' => $row[5],
                'VIS_VILLE' => $row[6],
            ]);

            event(new Registered($user));
        }
    }
}
