<template>

    <Head title="AddAccount" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">AddAccount</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form method="POST" :action="route('AddAccount.importcsv')" enctype="multipart/form-data">
                        <input type="hidden" name="_token" :value="csrf">
                        <input type="file" name="csvFile" accept=".csv" />
                        <button type="submit">Import</button>
                    </form>
                    <InputError class="mt-2" :message="form.errors.csvFile" />
                    <InputError class=" mt-2" :message="form.errors.email" />
                    <InputError class="mt-2" :message="form.errors.password" />
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    <InputError class="mt-2" :message="form.errors.VIS_NOM" />
                    <InputError class="mt-2" :message="form.errors.VIS_PRENOM" />
                    <InputError class="mt-2" :message="form.errors.VIS_ADRESSE" />
                    <InputError class="mt-2" :message="form.errors.VIS_CP" />
                    <InputError class="mt-2" :message="form.errors.VIS_VILLE" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import InputError from '@/Components/InputError.vue';
    import {
        Head,
        useForm
    } from '@inertiajs/vue3';
    import {
        ref,
        toRefs
    } from 'vue';



    const props = defineProps({
        errors: Object,
    });

    const form = useForm({

        email: '',
        password: '',
        password_confirmation: '',
        VIS_NOM: '',
        VIS_PRENOM: '',
        VIS_ADRESSE: '',
        VIS_CP: '',
        VIS_VILLE: '',
    });





    const errors = ref(props.errors || {});
    const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
</script>
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
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'VIS_NOM' => 'required|string|max:255',
            'VIS_PRENOM' => 'required|string|max:255',
            'VIS_ADRESSE' => 'required|string|max:255',
            'VIS_CP' => 'required|integer|digits:5',
            'VIS_VILLE' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('AddAccount.index')
                ->withErrors($validator)
                ->withInput();
        }
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

        return redirect(RouteServiceProvider::HOME);
    }
}
le syteme d'envoie d'erreur dans la view ne fonctionne pas
