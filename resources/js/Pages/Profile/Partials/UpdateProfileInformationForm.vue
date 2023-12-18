<!-- <script setup>
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
    VIS_DATEEMBAUCHE: '',

});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />
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
                Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template> -->

















<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    email: user.email,
    VIS_NOM: user.VIS_NOM,
    VIS_PRENOM: user.VIS_PRENOM,
    VIS_ADRESSE: user.VIS_ADRESSE,
    VIS_CP: user.VIS_CP,
    VIS_VILLE: user.VIS_VILLE,
});


</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Information</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile information and email address.
            </p>
        </header>

        <form @submit.prevent="form.patch(route('profile.update'))" class="mt-6 space-y-6">


            <div>
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="VIS_NOM" value="Nom" />

                <TextInput id="VIS_NOM" type="text" class="mt-1 block w-full" v-model="form.VIS_NOM" required
                    autocomplete="VIS_NOM" />

                <InputError class="mt-2" :message="form.errors.VIS_NOM" />
            </div>

            <div>
                <InputLabel for="VIS_PRENOM" value="Prenom" />

                <TextInput id="VIS_PRENOM" type="text" class="mt-1 block w-full" v-model="form.VIS_PRENOM" required
                    autocomplete="VIS_PRENOM" />

                <InputError class="mt-2" :message="form.errors.VIS_PRENOM" />
            </div>
            <div>
                <InputLabel for="VIS_ADRESSE" value="Adresse" />

                <TextInput id="VIS_ADRESSE" type="text" class="mt-1 block w-full" v-model="form.VIS_ADRESSE" required
                    autocomplete="VIS_ADRESSE" />

                <InputError class="mt-2" :message="form.errors.VIS_ADRESSE" />
            </div>
            <div>
                <InputLabel for="VIS_CP" value="Code postale" />

                <TextInput id="VIS_CP" type="text" class="mt-1 block w-full" v-model="form.VIS_CP" required
                    autocomplete="VIS_CP" />

                <InputError class="mt-2" :message="form.errors.VIS_CP" />
            </div>
            <div>
                <InputLabel for="VIS_VILLE" value="Ville" />

                <TextInput id="VIS_VILLE" type="text" class="mt-1 block w-full" v-model="form.VIS_VILLE" required
                    autocomplete="VIS_VILLE" />

                <InputError class="mt-2" :message="form.errors.VIS_VILLE" />
            </div>




            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="text-sm mt-2 text-gray-800">
                    Your email address is unverified.
                    <Link :href="route('verification.send')" method="post" as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Click here to re-send the verification email.
                    </Link>
                </p>

                <div v-show="status === 'verification-link-sent'" class="mt-2 font-medium text-sm text-green-600">
                    A new verification link has been sent to your email address.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition enter-active-class="transition ease-in-out" enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out" leave-to-class="opacity-0">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
