<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Carousel from '@/Components/Carousel.vue';
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },

});
</script>



<template>
<nav class="bg-gradient-to-b from-green-400 to-blue-400
            fixed top-0 z-50 w-full">
  <div class="px-3 py-3 lg:px-5 lg:pl-3 bg-customgray">
        <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <Link href="/" class="flex ml-2 md:mr-24">
                    <img src="../../../public/partas_logo.png" class="h-11 mr-3" alt="FlowBite Logo" />
                    </Link>
                </div>
                <div class="flex items-center">
                        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-4 text-right">
                                <Link
                                    v-if="$page.props.auth.user"
                                    :href="route('dashboard')"
                                    class="font-semibold text-2xl text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    >Dashboard</Link
                                >

                                <template v-else>
                                <div class="flex justify-center"> <!-- Centering the buttons -->
                                    <Link
                                :href="route('login')"
                                class="flex font-semibold text-s text-gray-600 hover:text-gray-900 dark:text-gray-400
                                dark:hover:text-white focus:outline focus:outline-1 focus:rounded-sm focus:outline-red-500 bg-white
                                px-4 py-2 rounded-md sm:top-0"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="flex ml-4 font-semibold text-s text-gray-600 hover:text-gray-900 dark:text-gray-400
                                dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 bg-white
                                px-4 py-2 rounded-md"
                            >
                                Register
                            </Link>
                                    </div>
                                </template>
                        </div>
                </div>
        </div>
  </div>
</nav>

<div class="element-class">
    <div class="element-class h-screen flex items-center justify-center">
        <img src="../../../public/QUADBUS3C.png" class="absolute inset-0 w-full" alt="...">
    </div>
</div>

<div class="flex justify-center gap-8" style="margin: 50px 400px;">
    <!-- Card 1 -->
    <div class="w-1/3 p-6 bg-blue-500 rounded-lg text-white shadow-md ">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-2xl font-semibold mb-6 text-center">Convenient Online Booking</h1>
            <img src="../../../public/olbook.png" alt="Image" class="w-24 h-24 rounded-full mb-6">
            <p class="text-sm text-gray-200 text-center mt-4 mb-8">Streamlined online ticketing with instant e-ticket delivery and easy cancellation.</p>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="w-1/3 p-6 bg-blue-500 rounded-lg text-white shadow-md">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-2xl font-semibold mb-6 text-center">Automated Bus Scheduling</h1>
            <img src="../../../public/abs.png" alt="Image" class="w-24 h-24 rounded-full mb-6">
            <p class="text-sm text-gray-200 text-center mt-4 mb-8">Automatic display of schedules and journey specifics after bus operators schedule services.</p>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="w-1/3 p-6 bg-blue-500 rounded-lg text-white shadow-md">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-2xl font-semibold mb-6 text-center">Seat Selection and Discounts</h1>
            <img src="../../../public/ssd.png" alt="Image" class="w-24 h-24 rounded-full mb-6">
            <p class="text-sm text-gray-200 text-center mt-4 mb-8">Choice of seats with potential savings through discounts and promo codes.</p>
        </div>
    </div>
</div>


<div class="grid grid-cols-4 gap-4 bg-blue-500" style="padding: 50px 200px;">
    <!-- Card 1 -->
    <div class="relative">
        <img src="../../../public/desti1.jpg" alt="Image" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-gray-600 opacity-60"></div>
        <h2 class="absolute bottom-4 left-0 right-0 text-white text-center text-xl">MANILA to TAGAYTAY</h2>
    </div>

    <!-- Repeat for other cards -->
    <!-- Card 2 -->
    <div class="relative">
        <img src="../../../public/desti3.jpg" alt="Image" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-gray-600 opacity-60"></div>
        <h2 class="absolute bottom-4 left-0 right-0 text-white text-center text-xl">MANILA to BATANES</h2>
    </div>

    <!-- Card 3 -->
    <div class="relative">
        <img src="../../../public/desti2.jpg" alt="Image" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-gray-600 opacity-60"></div>
        <h2 class="absolute bottom-4 left-0 right-0 text-white text-center text-xl">MANILA to BANAUE</h2>
    </div>

    <!-- Card 4 -->
    <div class="relative">
        <img src="../../../public/desi4.jpg" alt="Image" class="w-full h-80 object-cover">
        <div class="absolute inset-0 bg-gray-600 opacity-60"></div>
        <h2 class="absolute bottom-4 left-0 right-0 text-white text-center text-xl">MANILA to LAOAG</h2>
    </div>
</div>


<footer style="color: #001E48; padding: 50px 500px;">
    <div class="container mx-auto px-4 gridcols grid-cols-3 gap-4 justify-center">
        <!-- Column 1 - About -->
        <div>
          <h3 class="text-lg font-semibold mb-4">About</h3>
          <ul class="text-sm">
            <li><a href="/about">Our Story</a></li>
            <li><a href="/about">Mission and Vision</a></li>
          </ul>
        </div>
  
        <!-- Column 2 - Guidelines -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Guidelines</h3>
          <ul class="text-sm">
            <li><a href="#">Terms and Conditions</a></li>
          </ul>
        </div>
  
        <!-- Column 3 - Support -->
        <div>
          <h3 class="text-lg font-semibold mb-4">Support</h3>
          <ul class="text-sm">
            <li><a href="/contact-us">Contact Us</a></li>
          </ul>
        </div>
      </div>
  
      <div class="container mx-auto px-4 mt-8 flex items-center justify-center">
    <a href="#" class="mr-12"><img src="../../../public/fb.png" alt="Facebook" style="width: 30px; height: 30px;" /></a>
    <a href="#" class="mr-12"><img src="../../../public/twit.png" alt="Twitter" style="width: 30px; height: 30px;" /></a>
    <a href="#" class="mr-12"><img src="../../../public/insta.png" alt="Instagram" style="width: 30px; height: 30px;" /></a>
    <a href="#" class="mr-12"><img src="../../../public/email.png" alt="Email" style="width: 30px; height: 30px;" /></a>
</div>



    </footer>

</template>

<style>
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

.gridcols {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three equal columns */
    gap: 1rem; /* Adjust the value as needed for the desired gap */
    justify-content: center; /* Align columns at the center horizontally */
}

</style>
