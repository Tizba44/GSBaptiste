<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head} from '@inertiajs/vue3';

defineProps({
    canLogin: {
         type: Boolean,
    }
});
</script>



<template>
    <Head title="Acceuil" />
    <div v-if="canLogin">
        <AuthenticatedLayout v-if="$page.props.auth.user">
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Accueil</h2>
            </template>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                </div>
            </div>
        </AuthenticatedLayout>
        <GuestLayout v-else>
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Accueil</h2>
            </template>
        </GuestLayout> 
    </div>


</template>