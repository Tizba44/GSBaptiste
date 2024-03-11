<template>
  <div>
    <h1>Liste des praticiens</h1>
    <!-- Add a search form -->
    <form @submit.prevent="search">
      <input v-model="form.nom" type="text" placeholder="Nom">
      <input v-model="form.ville" type="text" placeholder="Ville">
      <button type="submit">Rechercher</button>
    </form>
    <table>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Adresse</th>
          <th>Ville</th>
          <th>Coefficient de notoriété</th>
          <th>Type</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="praticien in praticiens" :key="praticien.PRA_NUM">
          <td>{{ praticien.PRA_NOM }}</td>
          <td>{{ praticien.PRA_PRENOM }}</td>
          <td>{{ praticien.PRA_ADRESSE }}</td>
          <td>{{ praticien.PRA_VILLE }}</td>
          <td>{{ praticien.PRA_COEFNOTORIETE }}</td>
          <td>{{ praticien.TYP_CODE }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>

import { computed  } from 'vue';
import { usePage, useForm } from '@inertiajs/vue3';

let form = useForm({
  nom: '',
  ville: ''
});
let { props } = usePage();
let praticiens = computed(() => props.praticiens);


const search = () => {
  form.get(route('praticiens.search'));
}
</script>
