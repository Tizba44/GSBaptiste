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

    public function importcsv(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'csvFile' => 'required|file|mimes:csv,txt',
        ]);

        if ($validator->fails()) {
            return redirect('AddAccount')
                ->withErrors($validator)
                ->withInput();
        }

        // Get the CSV file path
        $path = $request->file('csvFile')->getPathname();

        // Read the first line of the CSV file to get the headers
        $file = fopen($path, 'r');
        $headers = fgetcsv($file);
        fclose($file);

        // Define the expected form field names and validation rules
        $expectedFields = [
            'email',
            'password',
            'VIS_NOM',
            'VIS_PRENOM',
            'VIS_ADRESSE',
            'VIS_CP',
            'VIS_VILLE',
        ];


        $data = array_map('str_getcsv', file($path));
        $row = $data[0];


        // Compare the headers with the expected fields
        if ($headers !== $expectedFields) {
            // Handle the case when the CSV file headers are different from the expected fields
            return redirect('AddAccount')->withErrors(['csvFile' => 'The CSV file headers do not match the expected fields.']);
        }


        $expectedRules = [
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'VIS_NOM' => 'required|string|max:255',
            'VIS_PRENOM' => 'required|string|max:255',
            'VIS_ADRESSE' => 'required|string|max:255',
            'VIS_CP' => 'required|integer|digits:5',
            'VIS_VILLE' => 'required|string|max:255',
        ];

        // Compare the validation rules for each field
        foreach ($expectedFields as $field) {
            if (!isset($expectedRules[$field])) {
                // Handle the case when a field is missing in the expected rules
                return redirect('AddAccount')->withErrors(['csvFile' => 'The validation rules for the CSV file are incomplete.']);
            }

            $fieldRules = $expectedRules[$field];
            $csvFieldIndex = array_search($field, $headers);

            // Check if the field exists in the CSV file
            if ($csvFieldIndex === false) {
                // Handle the case when a field is missing in the CSV file
                return redirect('AddAccount')->withErrors(['csvFile' => 'The CSV file is missing the field: ' . $field]);
            }


            // Validate the field value based on the expected rules and skip the first row
            if ($row === $headers) {
                continue;
            }
            $fieldValue = $row[$csvFieldIndex];
            $validator = Validator::make([$field => $fieldValue], [$field => $fieldRules]);
            if ($validator->fails()) {
                // Handle the case when a field value does not pass the validation rules
                return redirect('AddAccount')->withErrors(['csvFile' => 'The field value for ' . $field . ' is invalid.']);
            }
        }

        // Continue with the rest of the code to create accounts from the CSV file

        foreach ($data as $row) {
            // Skip the first row (headers)
            if ($row === $headers) {
                continue;
            }
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

        return redirect('AddAccount')->with('success', 'Accounts have been created successfully.');
    }
}
