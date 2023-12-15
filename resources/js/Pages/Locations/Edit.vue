<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,router  } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import { reactive,ref } from 'vue'

const props = defineProps({
      location: Object,
      error: String
  })


  const form= reactive({
            _method: 'put',
            location: props.location.location,


    })

    function update() {
        router.post(`/location/${props.location.id}`, {
            _method: 'put',
            location: form.location,

        })
  }

</script>



<template>
    <Head title="Update Location " />

    <AuthenticatedLayout>


        <div class="py-12 font-lalezar text-xl">
            <div class="flex justify-center text-white">
                        <h1>EDIT LOCATION</h1>
                    </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-x-auto  mx-8 ">
                            <form @submit.prevent="update" >
                                <InputLabel for="location" value="location" class="text-xl"/>
                                <TextInput class="text-xl"
                                    id="code"
                                    type="text"
                                    v-model="form.location"
                                    required
                                />
                                <div class=" pt-5 md:w-1/3 text-xl">
                                   <PrimaryButton>Submit</PrimaryButton>
                                </div>
                            </form>
                    </div>
                </div>
            </div>

    </AuthenticatedLayout>
</template>
