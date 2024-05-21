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
import { usePage, useForm, Head } from '@inertiajs/vue3';
import { computed, onMounted, ref } from 'vue';


const { errors } = usePage().props;
const form = ref({
    errors: errors,
    csvFile: '',
    email: '',
    password: '',
    password_confirmation: '',
    VIS_NOM: '',
    VIS_PRENOM: '',
    VIS_ADRESSE: '',
    VIS_CP: '',
    VIS_VILLE: '',
});

onMounted(() => {
    console.log(form.value.errors); // Log errors to console
});


const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content');


</script>
