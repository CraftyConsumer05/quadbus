<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <img src="partas_logo.png" class="h-11 mr-3" style="margin-bottom: 20px;">

        <h1 class="text-white text-4xl font-lalezar mt-1">
            Register
        </h1>
        <h2 class="text-white text-xl font-[lateef] mt-0" style="margin-bottom: 20px;">
            Continue your journey with Quad.
        </h2>

        <Head title="Register" />
        
        <form @submit.prevent="submit"  class="text-white">
            <div>
                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full text-gray-800"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full text-gray-800"
                    v-model="form.email"
                    required
                    autocomplete="username"
                    placeholder="Email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full text-gray-800"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                    placeholder="Password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full text-gray-800"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                    placeholder="Confirm Password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="mt-5">
                <PrimaryButton
                class="w-full content-center bg-white"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
                style="color: #001E48; text-align: center;"
            >
                <span class="w-full text-center">Register</span>
            </PrimaryButton>
            </div>

            <div class="flex items-center gap-4" style="margin-top: 20px;">
                <a
                    href="http://127.0.0.1:8000/"
                    class="underline text-white text-sm hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 mr-auto"
                >
                    Cancel
                </a>
            </div>

            <div class="text-center mt-5">
                <p style="color: white;">
                    Already Have an Account?
                    <Link
                        :href="route('login')"
                        class="text-red-400"
                    >
                        Log in Now
                    </Link>
                </p>
            </div>

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
