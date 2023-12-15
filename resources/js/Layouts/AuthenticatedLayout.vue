<script setup>
import {ref} from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';
import Sidebar from '@/Components/Sidebar.vue'
import Navbar from '@/Components/Navbar.vue'
defineProps({
    count_reservation: Number
})

</script>

<template>
    <div class="min-h-screen bg-gradient-to-b from-green-400 to-blue-400 py-4 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      <Navbar />
      <Sidebar />
      <main class="bg-customgray flex justify-center items-center rounded-lg ml-20 mt-14 px-2 ">
        <div class="p-4">
            <slot />
        </div>
      </main>
    </div>
  </template>
  