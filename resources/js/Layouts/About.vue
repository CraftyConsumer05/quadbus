<template>
  <div>
    <header>
      <img src="about.jpg" alt="">
      <h1>OUR STORY</h1>
      <h2>WHERE WE STARTED</h2>
      <p>{{ story }}</p>
    </header>

    <section class="blue-section">
      <h1>OUR CULTURE</h1>
      <div class="container">
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

  <footer style="color: #001E48; padding: 50px 500px;">
    <div class="container mx-auto px-4 gridcols grid-cols-3 gap-4 justify-center">
        <!-- Column 1 - About -->
        <div>
          <h3 class="text-lg font-semibold mb-4">About</h3>
          <ul class="text-sm">
            <li><a href="#">Our Story</a></li>
            <li><a href="#">Mission and Vision</a></li>
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
            <li><a href="#">Contact Us</a></li>
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
      mapSrc: "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396904.6674331936!2d-74.0059731!3d40.7127753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDQ1JzEwLjciTiA3MMKwMTYnMjIuMiJX!5e0!3m2!1sen!2sus!4v1546999834881"
    };
  },
};
</script>

<style scoped>
/* CSS Styles */
body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #001E48;
            line-height: 1.6;
        }
        header {
            height: 100vh;
            background-image: url('path_to_your_image.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: justify; /* Justify text */
            padding: 0 200px;
        }

        .gridcols {
          display: grid;
          grid-template-columns: repeat(3, 1fr); /* Three equal columns */
          gap: 1rem; /* Adjust the value as needed for the desired gap */
          justify-content: center; /* Align columns at the center horizontally */
      }

        header p {
            text-align: justify;
            margin: 0;
        }
        section {
            background-color: #FFFFFF;
            padding: 50px 20px;
        }
        .blue-section {
            background-color: #001E48;
            color: white;
            text-align: center;
            padding: 50px 200px;
        }
        .blue-section h2, .blue-section p {
            color: white;
        }

    
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns of equal width */
            gap: 20px; /* Gap between the columns */
        }

        .mission, .vision {
            padding: 20px;
            box-sizing: border-box;
        }

        .mission h1, .vision h1,
        .mission p, .vision p {
            margin: 0; /* Reset margins for paragraphs and headings */
        }

        .mission h1, .vision h1 {
            font-size: 24px;
        }

        .mission p, .vision p {
            font-size: 16px;
            text-align: justify;
        }

</style>
