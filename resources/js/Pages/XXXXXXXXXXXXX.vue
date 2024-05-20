<template>

    <Head title="XXXXXXXXXXXXXXXXXXX" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">XXXXXXXXXXXXXXXXXXXXXXXX</h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">


                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>


<script setup>
import { computed, onMounted } from 'vue';
import { usePage, useForm, Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';


</script>
