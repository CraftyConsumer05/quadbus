<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const showDropdown = ref(false);

function toggleDropdown() {
  showDropdown.value = !showDropdown.value;
}

// Close the dropdown when clicking outside of it
window.addEventListener('click', (e) => {
  if (!e.target.closest('.dropdown-button')) {
    showDropdown.value = false;
  }
});
</script>

<template>
  <nav class="fixed top-0 z-50 w-full bg-customgray from-green-400 to-blue-400">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <Link href="/dashboard" class="flex ml-2 md:mr-24">
          <img src="../../../public/partas_logo.png" class="h-8 mr-3" alt="FlowBite Logo" />
        </Link>
      </div>
    <div class="flex items-center">
      <div class="flex items-center ml-3 relative">
        <!-- Profile button -->
        <a href="#" class="flex text-white px-2 bg-customgray rounded-full ring-4 ring-gray-300 dark:ring-gray-600 dropdown-button" aria-expanded="false" @click.prevent="toggleDropdown">
          <span>{{$page.props.auth.user.name}}</span>
        </a>

        <!-- Dropdown Content -->
        <div v-if="showDropdown" class="absolute right-0 top-10 py-2 w-48 bg-white rounded-md shadow-xl z-10">
          <Link href="/profile" class="flex px-4 py-2  text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                     <span class="px-2">
                      Profile
                      </span>
                  </Link>
                  <Link :href="route('logout')"  method="post" class="flex px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                     <span class="px-2">
                        Sign out
                    </span>
                  </Link>
      </div>
      </div>
    </div>
  </div>
        </div>
  </nav>
</template>
