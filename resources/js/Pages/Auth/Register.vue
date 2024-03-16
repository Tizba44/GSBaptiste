<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';



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

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>

<template>
    <Head title="Créer un compte" />
    
    <div class="min-h-screen bg-gray-100">
        <GuestLayout>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un compte</h2>
            </template>
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                    <form @submit.prevent="submit">
                        <div class="mt-4">
                            <InputLabel for="email" value="Email" />

                            <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                                autocomplete="username" />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="password" value="Mot de passe" />

                            <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                                autocomplete="new-password" />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="password_confirmation" value="Confirmer le mot de passe" />

                            <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                                v-model="form.password_confirmation" required autocomplete="new-password" />

                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="VIS_NOM" value="Nom" />

                            <TextInput id="VIS_NOM" type="text" class="mt-1 block w-full" v-model="form.VIS_NOM" required
                                autocomplete="VIS_NOM" />

                            <InputError class="mt-2" :message="form.errors.VIS_NOM" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="VIS_PRENOM" value="Prenom" />

                            <TextInput id="VIS_PRENOM" type="text" class="mt-1 block w-full" v-model="form.VIS_PRENOM" required
                                autocomplete="VIS_PRENOM" />

                            <InputError class="mt-2" :message="form.errors.VIS_PRENOM" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="VIS_ADRESSE" value="Adresse" />

                            <TextInput id="VIS_ADRESSE" type="text" class="mt-1 block w-full" v-model="form.VIS_ADRESSE" required
                                autocomplete="VIS_ADRESSE" />

                            <InputError class="mt-2" :message="form.errors.VIS_ADRESSE" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="VIS_CP" value="Code postale" />

                            <TextInput id="VIS_CP" type="text" class="mt-1 block w-full" v-model="form.VIS_CP" required
                                autocomplete="VIS_CP" />

                            <InputError class="mt-2" :message="form.errors.VIS_CP" />
                        </div>
                        <div class="mt-4">
                            <InputLabel for="VIS_VILLE" value="Ville" />

                            <TextInput id="VIS_VILLE" type="text" class="mt-1 block w-full" v-model="form.VIS_VILLE" required
                                autocomplete="VIS_VILLE" />

                            <InputError class="mt-2" :message="form.errors.VIS_VILLE" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <Link :href="route('login')"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Vous avez déjà un compte ?
                            </Link>

                            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                S'inscrire
                            </PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
           
           
        </GuestLayout>
    </div>
</template>



