<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,router } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import { reactive,ref } from 'vue'
import InputLabel from '@/Components/InputLabel.vue'
import TextInput from '@/Components/TextInput.vue'

    const form=reactive({
        location: "",
    })
        function submit() {
        router.post(route("location.store"),form);
    }
    function filterLocations() {
        return locations.filter(location =>
            location.name.toLowerCase().includes(form.location.toLowerCase())
        );
    }

</script>


<template>
    <Head title="Create Location" />
    <AuthenticatedLayout>
        <div class="py-12 font-lalezar">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              
                        <form class="w-full max-w-sm"
                        @submit.prevent="submit">
                            <div class="md:w-1/3">
                            <InputLabel for="location" class=""
                                value="Location"/>
                            </div>
                        <div class="block w-full">
                            <TextInput id="location" type="text"
                        v-model="form.location" required />
                        </div>
                        <div class=" py-3 ">
                        <PrimaryButton type="submit"> Submit
                        </PrimaryButton>
                        </div>
                        
                        </form>
                </div>
            </div>
    </AuthenticatedLayout>
</template>