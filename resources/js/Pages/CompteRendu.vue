<template>



  <Head title="Compte Rendu" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Compte rendu</h2>
    </template>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <h3 class="font-semibold text-xl text-gray-800 leading-tight">Crée un compte rendu </h3>
          <form @submit.prevent="submit">
            <!-- praticien -->
            <div class="mt-4">
              <InputLabel for="praticien" value="Praticien" />
              <select v-model="form.praticien" id="praticien"
                class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                <option v-for="praticien in praticiens" :value="praticien.PRA_NUM" :key="praticien.PRA_NUM">
                  {{ praticien.PRA_NOM }} {{ praticien.PRA_PRENOM }}
                </option>
              </select>
              <InputError class="mt-2" :message="form.errors.praticien" />
            </div>
            <!-- drop down pour choisir médicament -->
            <div class="mt-4">
              <InputLabel for="medicament" value="Médicament" />
              <select v-model="form.medicament" id="medicament"
                class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                <option v-for="medicament in medicaments" :value="medicament.MED_DEPOTLEGAL"
                  :key="medicament.MED_DEPOTLEGAL">
                  {{ medicament.MED_NOMCOMMERCIAL }}
                </option>
              </select>
              <InputError class="mt-2" :message="form.errors.medicament" />
            </div>
            <!-- motif de la visite -->
            <div class="mt-4">
              <InputLabel for="motif" value="Motif de la visite" />
              <TextInput id="motif" type="text" class="mt-1 block w-full" v-model="form.motif" required
                autocomplete="motif" />

              <InputError class="mt-2" :message="form.errors.motif" />
            </div>
            <!-- date de la visite -->
            <div class="mt-4">
              <InputLabel for="date" value="Date de la visite" />
              <TextInput id="date" type="date" class="mt-1 block w-full" v-model="form.date" required
                autocomplete="date" />
              <InputError class="mt-2" :message="form.errors.date" />
            </div>
            <!-- bilan de la visite -->
            <div class="mt-4">
              <InputLabel for="bilan" value="Bilan" />
              <textarea id="bilan" class="mt-1 block w-full" v-model="form.bilan" required autocomplete="bilan" />
              <InputError class="mt-2" :message="form.errors.bilan" />
            </div>

            <div class="mt-4">
              <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Envoyer
              </PrimaryButton>
            </div>
          </form>
        </div>
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
          <h3 class="font-semibold text-xl text-gray-800 leading-tight">Voir ses compte rendus </h3>
          <!-- selectionner le compte rendu a afficher         -->
          <div class="mt-4">
            <InputLabel for="rapport" value="Compte rendu" />
            <select v-model="form.rapport" id="rapport"
              class="rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
              <option v-for="rapport in rapports" :value="rapport.id" :key="rapport.id">
                {{ rapport.RAP_MOTIF }} {{ rapport.RAP_DATE }}
              </option>
            </select>

            <div v-if="selectedRapport">
              <div class="mt-4">
                <InputLabel for="motif" value="Motif" />
                <p>{{ selectedRapport.RAP_MOTIF }}</p>
              </div>
              <div class="mt-4">
                <InputLabel for="date" value="Date" />
                <p>{{ selectedRapport.RAP_DATE }}</p>
              </div>
              <div class="mt-4">
                <InputLabel for="bilan" value="Bilan" />
                <p>{{ selectedRapport.RAP_BILAN }}</p>
              </div>
              <div class="mt-4">
                <InputLabel for="medicament" value="Médicament" />
                <p>{{ selectedRapport.medicament ? selectedRapport.medicament.MED_NOMCOMMERCIAL : 'N/A' }}</p>
              </div>
              <div class="mt-4">
                <InputLabel for="praticien" value="Praticien" />
                <p>{{ selectedRapport.praticien ? selectedRapport.praticien.PRA_NOM : 'N/A' }} {{
            selectedRapport.praticien
              ? selectedRapport.praticien.PRA_PRENOM : 'N/A' }}</p>
              </div>
              <div class="mt-4">
                <a :href="`/compteRendu/download/${selectedRapport.id}`">
                  <PrimaryButton class="ms-4" :href="`/compteRendu/download/${selectedRapport.id}`">
                    Télécharger le PDF
                  </PrimaryButton>
                </a>
              </div>
            </div>
          </div>
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
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

let { props } = usePage();

let praticiens = computed(() => props.praticiens);
let medicaments = computed(() => props.medicaments);
let rapports = computed(() => props.rapports);

let selectedRapport = computed(() => {
  return rapports.value.find(rapport => rapport.id === form.rapport);
});


let form = useForm({
  praticien: '',
  medicament: '',
  motif: '',
  date: '',
  bilan: '',
});

onMounted(() => {
  form.praticien = praticiens.value[0].PRA_NUM;
  form.medicament = medicaments.value[0].MED_DEPOTLEGAL;

  if (rapports.value.length > 0) {
    form.rapport = rapports.value[0].id;
  }

  console.log(form.date);
});

function submit() {
  form.post(route('compteRendu.store'), {
    preserveScroll: true,
    onSuccess: () => {
      form.reset();
      //  reload data to see new the list of report
      form.get(route('compteRendu.index'));
    },
  });
}

</script>