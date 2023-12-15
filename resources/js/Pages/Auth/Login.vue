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
        <Head title="Log in" />

        <a
        href="http://127.0.0.1:8000/"
        class="underline text-white text-sm hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
        >
            Cancel
        </a>

        <h1 class="text-white text-4xl font-lalezar mt-1">
            Log In
        </h1>
        <h2 class="text-white text-xl font-[lateef] mt-0">
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
        class="w-full content-center text-center bg-white font-lalezar"
        :class="{ 'opacity-25': form.processing }"
        :disabled="form.processing"
        style="color: rgb(21, 20, 27);"
    >
        Log in
    </PrimaryButton>
</div>
            <div class="flex items-center justify-end mt-4">

                
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                
            </div>
        </form>

    </GuestLayout>

</template>
