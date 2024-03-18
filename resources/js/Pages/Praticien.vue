
<template>
  <Head title="Praticien" />
  <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Praticien</h2>
      </template>
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">  
          <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
              <div class="mt-4">
                <!-- recherche de praticien avec un input  -->
                  <form @submit.prevent="search">
                  <input v-model="form.nom" type="text" placeholder="Nom" class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                  <input v-model="form.ville" type="text" placeholder="Ville" class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                  <input v-model="form.type" type="text" placeholder="Type" class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
             
                    <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Rechercher
                    </PrimaryButton>
           
                </form>
                 </div>
                <!-- selectionner un praticien a afficher -->       
              <div class="mt-4">      
                <select v-model="form.praticien" id="praticien" class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" :menu-is-open="true">
                  <option v-for="praticien in praticiens" :value="praticien.PRA_NUM" :key="praticien.PRA_NUM">
                    <span>{{ praticien.PRA_NOM }}</span> <span>{{ praticien.PRA_PRENOM }} / </span>
                    <span>{{ praticien.PRA_VILLE }} / </span>
                    <span>{{ praticien.type_praticien ? praticien.type_praticien.TYP_LIBELLE: 'N/A' }}</span>
                  </option>
                </select>
              </div>
              <div v-if="selectedPraticien">
                  <div class="mt-4">
                    <InputLabel for="nom" value="Nom" />
                      <p>{{ selectedPraticien.PRA_NOM }}</p>
                  </div>
                  <div class="mt-4">
                    <InputLabel for="prenom" value="Prénom" />
                      <p>{{ selectedPraticien.PRA_PRENOM }}</p>  
                  </div>
                  <div class="mt-4">
                    <InputLabel for="ville" value="Ville" />
                      <p>{{ selectedPraticien.PRA_VILLE }}</p>
                  </div>
                  <div class="mt-4">
                    <InputLabel for="type" value="Type" />
                      <p>{{ selectedPraticien.type_praticien ? selectedPraticien.type_praticien.TYP_LIBELLE: 'N/A' }}</p>
                  </div>
                  <div class="mt-4">
                     <InputLabel for="adresse" value="Adresse" />
                      <p>{{ selectedPraticien.PRA_ADRESSE }}</p>
                  </div>
                  <div class="mt-4">
                      <InputLabel for="cp" value="Code postal" />
                      <p>{{ selectedPraticien.PRA_CP }}</p>
                  </div>
                   <div class="mt-4">
                      <InputLabel for="coef" value="Coefficient de notoriété" />
                      <p>{{ selectedPraticien.PRA_COEFNOTORIETE }}</p>
                   </div>
              </div>

          </div>
        </div>  
      </div>
  </AuthenticatedLayout>
</template>


<script setup>
import { computed, onMounted} from 'vue';
import { usePage, useForm, Head} from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';


let form = useForm({
  nom: localStorage.getItem('nom') || '',
  ville: localStorage.getItem('ville') || '',
  type: localStorage.getItem('type') || ''
});

let { props } = usePage();
let praticiens = computed(() => props.praticiens);

let selectedPraticien = computed(() => {
  return praticiens.value.find(praticien => praticien.PRA_NUM === form.praticien);
});

onMounted(() => {
  if (praticiens.value.length > 0) {
    form.praticien = praticiens.value[0].PRA_NUM;
  }
  else {
    form.praticien = '';
  }
});


const search = () => {
  // rétablir toutes les valeurs de recherche

  localStorage.setItem('nom', form.nom);
  localStorage.setItem('ville', form.ville);
  localStorage.setItem('type', form.type);
  form.get(route('praticiens.search'));
}

onMounted(() => {
  // Clear the stored values when the component is mounted
  localStorage.removeItem('nom');
  localStorage.removeItem('ville');
  localStorage.removeItem('type');
});
</script>

