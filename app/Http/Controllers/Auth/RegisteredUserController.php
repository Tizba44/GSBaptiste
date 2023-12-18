<?php

namespace App\Http\Controllers\Auth;

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

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {


        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'VIS_NOM' => 'required|string|max:255',
            'VIS_PRENOM' => 'required|string|max:255',
            'VIS_ADRESSE' => 'required|string|max:255',
            'VIS_CP' => 'required|string|max:255',
            'VIS_VILLE' => 'required|string|max:255',
        ]);

        $user = User::create([

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'VIS_NOM' => $request->VIS_NOM,
            'VIS_PRENOM' => $request->VIS_PRENOM,
            'VIS_ADRESSE' => $request->VIS_ADRESSE,
            'VIS_CP' => $request->VIS_CP,
            'VIS_VILLE' => $request->VIS_VILLE,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
