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

<div class="main-container">
  <div class="story-section">
    <div class="story-header">
      <div class="header-image">
        <img src="about.jpg" alt="">
      </div>
      <div class="header-content">
        <h1>OUR STORY</h1>
        <h2>WHERE WE STARTED</h2>
        <p>{{ story }}</p>
      </div>
    </div>
  </div>

  <section class="blue-section">
    <h1>OUR CULTURE</h1>
    <div class="containers">
      <div class="mission">
        <div class="mission-content">
          <h1>Mission</h1>
          <p>{{ missionText }}</p>
        </div>
      </div>

      <div class="vision">
        <div class="vision-content">
          <h1>Vision</h1>
          <p>{{ visionText }}</p>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="sections-container">
  <section class="contact-section">
    <h1>CONTACT US</h1>
    <p>Our team is here to assist you. Please feel free to reach out to us with any questions or inquiries you may have.</p>
    <div class="contact-form">
      <form>
        <div class="form-group">
          <input type="text" required placeholder="Name">
        </div>
        <div class="form-group">
          <input type="email" required placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" required placeholder="Subject">
        </div>
        <div class="form-group">
          <textarea required placeholder="Message"></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>

  <section class="map-section">
    <h1>Visit Us</h1>
    <div class="operating-hours">
      <h2>Operating Hours</h2>
      <p>10:00 am - 12:00 am</p>
    </div>
    <div class="map-container">
        <iframe
            width="100%"
            height="100%"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            :src="mapSrc"
          ></iframe>
      <p>123 Main St.</p>
    </div>
  </section>
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

<script>
export default {
  data() {
    return {
      story: `Quad traces its roots back to the shared vision of four pioneering minds—Cristelle, Genn Rey, Edralin, and John Paul—united by their mutual passion for travel and technology. Their journey commenced amidst the intricacies of bus ticket reservations and a collective desire to revolutionize the travel industry.
Cristelle, the strategic thinker, foresaw untapped opportunities within the travel domain. Genn Rey, renowned for design finesse, envisioned a platform merging functionality with an inviting user interface. Edralin, the tech aficionado, contributed the technical prowess essential for building a robust online platform. John Paul, a natural communicator, emphasized the significance of customer satisfaction and sought to prioritize ease and convenience.
The convergence of their expertise gave birth to Quad—a virtual hub offering seamless bus reservations. The company's inception was marked by tireless brainstorming sessions, where the four visionaries toiled to reimagine the travel booking experience.
Quad emerged as a manifestation of their collective zeal—a commitment to simplifying bus reservations for all. Their dedicated efforts resulted in a meticulously crafted platform, characterized by streamlined booking processes and an intuitive interface.
Though challenges arose along the way, the quartet's united front propelled Quad forward. Their platform transformed into a trusted space where travelers found reliability, convenience, and personalized experiences.
Today, Quad stands as a testament to their shared dream. Their narrative echoes a tale of four minds united by a common vision, reshaping the bus reservation landscape through innovation, technology, and an unwavering dedication to enhancing every traveler's journey.`, // Your story content
      missionText: `At Quad, we revolutionize travel experiences by offering seamless, efficient, and safe transport solutions. Guided by our core values, we are committed to delivering timely, cost-effective, and top-quality transportation services, ensuring customer satisfaction and safety at every step.`, // Your mission content
      visionText: `Quad endeavors to be the premier choice in the transportation industry. Our aim is to set the benchmark for excellence, becoming the go-to transport company. We aspire to enhance the lives of our customers by providing unparalleled services, empower our dedicated team, generate optimal returns for our stakeholders, and contribute significantly to the growth and development of the communities we serve. Through our commitment to innovation and service excellence, we strive to elevate the travel experience for all.`, // Your vision content
      mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.8431506345824!2dYOUR-LONGITUDE!3dYOUR-LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AYOUR-LOCATION!2sYOUR-COMPANY!5e0!3m2!1sen!2sus!4v1621346978477!5m2!1sen!2sus"
    };
  },
};
</script>
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


.main-container {
  margin: 0 auto;
}

.story-section {
  margin-bottom: 40px;
}

.header-image img {
  max-width: 100%;
  height: auto;
}

.header-content {
  text-align: center;
  padding: 20px;
  margin: 20px 300px;
  color: #001E48;
}

.header-content h1 {
  font-size: 32px;
  margin: 20px 200px;
}

.header-content h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.header-content p {
  font-size: 18px;
  line-height: 1.6;
  text-align: justify;
}

.header-image img {
  width: 100%; /* Set the image width to 100% */
  height: auto;
  display: block; /* Ensures the image behaves properly */
}
.blue-section {
  background-color: #001E48;
  color: white;
  text-align: center;
  padding: 50px 0;
}

.blue-section h1 {
  font-size: 36px;
  margin-bottom: 30px;
}

.containers {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns of equal width */
            gap: 20px; /* Gap between the columns */
            padding: 0 200px;
        }

        .mission, .vision {
            padding: 20px;
            box-sizing: border-box;
        }

        .mission h1, .vision h1,
        .mission p, .vision p {
            margin: 0; /* Reset margins for paragraphs and headings */
            padding-bottom: 20px;
        }

        .mission h1, .vision h1 {
            font-size: 24px;
        }

        .mission p, .vision p {
            font-size: 16px;
            text-align: justify;
        }

        .contact-section,
.map-section {
  flex: 1;
  padding: 50px;
  box-sizing: border-box; /* Ensure padding doesn't affect overall width */
}

.sections-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px; /* Adjust gap between sections */
  background-color: #f9f9f9;
}

.contact-section h1 {
  margin-bottom: 20px;
  font-size: 2em;
}

.contact-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  width: 80%;
  margin-top: 30px;
}

.form-group input,
.form-group textarea {
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  border: 1px solid #B7BCCE;
  margin-bottom: 20px;
}

button[type='submit'] {
  padding: 10px 20px;
  background-color: #001E48;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type='submit']:hover {
  background-color: #002366;
}

.map-section {
  padding: 50px;
  color: #001E48;
}

.map-container {
  width: 100%;
  height: 400px;
  margin-bottom: 20px;
}

.map-section h1 {
  margin-bottom: 10px;
  font-size: 2em;
}

</style>
