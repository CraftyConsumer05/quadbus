<template>
    <div class="container">
      <section class="contact-section">
        <h1>CONTACT US</h1>
        <p>Our team is here to assist you. Please feel free to reach out to us with any questions or inquiries you may have.</p>
        <div class="contact-form">
          <form @submit.prevent="submitForm">
            <div class="form-group">
              <input type="text" v-model="formData.name" required placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" v-model="formData.email" required placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" v-model="formData.subject" required placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea v-model="formData.message" required placeholder="Message"></textarea>
            </div>
            <button type="submit">Submit</button>
          </form>
        </div>
      </section>
  
      <section class="map-section">
        <h1>Visit Us</h1>
        <div class="map-container">
          <!-- Your map integration or iframe goes here -->
          <!-- Replace the content below with your actual map or iframe -->
          <iframe
            width="100%"
            height="100%"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            :src="mapSrc"
          ></iframe>
        </div>
        <!-- Your address or location information goes here -->
        <h1>Operating Hours</h1>
        <h1>10:00 am - 12:00 am</h1>
        <h1>Location</h1>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          subject: '',
          message: ''
        }
      };
    },
    computed: {
      mapSrc() {
        // Replace with your map src
        return "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.8431506345824!2dYOUR-LONGITUDE!3dYOUR-LATITUDE!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3AYOUR-LOCATION!2sYOUR-COMPANY!5e0!3m2!1sen!2sus!4v1621346978477!5m2!1sen!2sus";
      }
    },
    methods: {
      submitForm() {
        // Handle form submission logic here
        console.log('Form submitted:', this.formData);
        // You can send form data to an API or perform other actions as needed
      }
    }
  };
  </script>
  
  <style scoped>
  /* Your CSS styles for the contact and map sections */
  .container {
    display: flex;
  }
  
  .contact-section,
  .map-section {
    flex: 1;
    padding: 50px;
  }
  
  .contact-section {
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
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px;
    background-color: #001E48;
    color: white;
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
  