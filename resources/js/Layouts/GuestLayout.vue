<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<style>
/* Your .element-class CSS */
.element-class {
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
}
</style>

<template>
    <div class="min-h-screen py-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="flex flex-row">
            <!-- Your content here -->
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-customgray shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
