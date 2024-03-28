<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import anime from 'animejs';
import { defineProps, onMounted } from 'vue';






defineProps({
    canLogin: {
        type: Boolean,
    },

});


onMounted(() => {

    // fait apparaitre les li un par un
    anime({
        targets: 'li',
        opacity: [0, 1],
        translateY: [10, 0],
        delay: anime.stagger(200),
        easing: 'easeInOutCubic',
        duration: 400,
    });

    // checkbox not checked to checked


    // not checked disappear
    anime({
        targets: '.notchecked',
        opacity: [1, 0],
        translateY: [0, 10],

        delay: anime.stagger(200, { start: 400 }),
        easing: 'easeInOutCubic',
        duration: 400,
    });

    anime({
        targets: '.checked',
        display: 'true',
        opacity: [0, 1],
        translateY: [10, 0],
        delay: anime.stagger(200, { start: 400 }),
        easing: 'easeInOutCubic',
        duration: 400,
    });





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

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-800 leading-tight">Connecté en tant que :
                                    {{ $page.props.auth.user.email }} </h1>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-800 leading-tight">Fonctionnalités</h1>
                            </div>



                            <div class="mt-6 text-gray-500">
                                <ul class="list-disc">
                                    <li>
                                        <label for="transfer-data">Transférer les données de la base de données actuelle
                                            et assurer
                                            la continuité des informations. </label>
                                        <!-- checkbox deja coché -->
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>
                                    </li>

                                    <li>
                                        <label for="visitor-identification">Intégrer une fonctionnalité d'identification
                                            des
                                            visiteurs. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="update-personal-data">Permettre aux visiteurs identifiés de mettre à
                                            jour leurs
                                            données personnelles. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="available-practitioners">Afficher la liste des praticiens
                                            disponibles. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>

                                    </li>
                                    <li>
                                        <label for="search-speciality">Effectuer une recherche de praticiens selon leur
                                            spécialité.
                                        </label>

                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>

                                    </li>
                                    <li>
                                        <label for="advanced-search">Proposer une recherche avancée de praticiens basée
                                            sur leur nom
                                            et leur ville. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>

                                    </li>
                                    <li>
                                        <label for="create-report">Ajouter la possibilité de créer de nouveaux rapports
                                            de visite.
                                        </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>

                                    </li>
                                    <li>
                                        <label for="access-reports">Accéder aux rapports de visite existants. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>

                                    </li>
                                    <li>
                                        <label for="export-reports">Exporter les rapports en format PDF. </label>
                                        <div class="checkbox-container">
                                            <input type="checkbox" class="checked" name="transfer-data" checked>
                                            <input type="checkbox" name="transfer-data" class="notchecked">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



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


<style scoped>
li {
    margin-bottom: 10px;
}

/* superposer les checkbox  */
.checkbox-container {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    margin-left: 10px;
}

/* Hide the default checkbox */
.checkbox-container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkbox-container .checked {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #2196F3;
    border-radius: 5px;
}


/* Create a custom checkbox */
.checkbox-container .notchecked {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #2196F3;
    border-radius: 5px;
}
</style>
