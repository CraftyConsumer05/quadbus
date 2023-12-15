<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <img src="partas_logo.png" class="h-11 mr-3" style="margin-bottom: 30px;">
        <Head title="Log in" />

        <h1 class="text-white text-4xl font-lalezar mt-1">
            Log In
        </h1>
        <h2 class="text-white text-xl font-[lateef] mt-0" style="margin-bottom: 30px;">
            Continue your journey with Quad.
        </h2>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            
            
            <div>

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full text-gray-800"
                    placeholder="Email Address"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                    style="margin-bottom: 30px;"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full text-gray-800"
                    placeholder="Password"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                    style="margin-bottom: 30px;"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-1 text-sm">
                  <label class="flex items-center">
                  <Checkbox name="remember" v-model:checked="form.remember" />
                 <span class="ml-2 text-sm text-white">Remember me</span>
               </label>
            </div>
            
            <div class="mt-5">
                <PrimaryButton
                class="w-full content-center bg-white"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
                style="color: #001E48; text-align: center;"
            >
                <span style="display: block;">Log in</span>
            </PrimaryButton>



</div>
            <div class="flex items-center justify-end mt-4">

            <div class="flex items-center gap-4">
                <a
                    href="http://127.0.0.1:8000/"
                    class="underline text-white text-sm hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 mr-auto"
                >
                    Cancel
                </a>
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-white text-sm text-gray-600 hover:text-white-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>
            </div>

            </div>


            <p style="color: white; text-align: center; margin: 20px;">Don’t have an account? <span style="color: #FF9E9E;">Register Now</span></p>

        </form>

    </GuestLayout>

</template>

<style>
body {
    /* Standard syntax */
    background: hsla(217, 100%, 50%, 1);
    /* Fallback for older browsers */
    background: radial-gradient(circle, hsla(217, 100%, 50%, 1) 27%, hsla(186, 100%, 69%, 1) 100%);
    /* For Mozilla Firefox */
    background: -moz-radial-gradient(circle, hsla(217, 100%, 50%, 1) 27%, hsla(186, 100%, 69%, 1) 100%);
    /* For Webkit (Safari, Chrome) */
    background: -webkit-radial-gradient(circle, hsla(217, 100%, 50%, 1) 27%, hsla(186, 100%, 69%, 1) 100%);
    /* For Internet Explorer */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0061FF", endColorstr="#60EFFF", GradientType=1);
    /* Other properties for body */
    margin: 0;
    padding: 0;
    /* Ensure full height */
    height: 100vh;
}
</style>