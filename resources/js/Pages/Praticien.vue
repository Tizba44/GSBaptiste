p<template>
  <Head title="Praticien" />
  <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Praticien</h2>
      </template>
        <!-- Add a search form -->
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
              <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                  <form @submit.prevent="search">
                  <input v-model="form.nom" type="text" placeholder="Nom">
                  <input v-model="form.ville" type="text" placeholder="Ville">
                  <input v-model="form.type" type="text" placeholder="Type">
                  <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Rechercher
                    </PrimaryButton>
                  </div>
                </form>
              <table>
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Ville</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="praticien in praticiens" :key="praticien.PRA_NUM">
                    <td>{{ praticien.PRA_NOM }}</td>
                    <td>{{ praticien.PRA_PRENOM }}</td>
                    <td>{{ praticien.PRA_VILLE }}</td>
                    <td>{{ praticien.type_praticien ? praticien.type_praticien.TYP_LIBELLE: 'N/A' }}</td>
                  </tr>
                </tbody>
              </table>


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



let form = useForm({
  nom: localStorage.getItem('nom') || '',
  ville: localStorage.getItem('ville') || '',
  type: localStorage.getItem('type') || ''
});

let { props } = usePage();
let praticiens = computed(() => props.praticiens);

const search = () => {
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
