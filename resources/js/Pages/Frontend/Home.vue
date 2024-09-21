<template>
  <Frontend>
    <div
      class="flex flex-col lg:flex-row items-center lg:items-start justify-between px-4 lg:px-16 py-8 lg:py-16 mt-10 bg-white"
    >
      <!-- Text Section -->
      <div class="lg:w-1/2 text-center lg:text-left mt-11" data-aos="fade-right">
        <h1 class="text-4xl lg:text-6xl font-bold leading-tight mb-4" >
          Premium
          <br />
          Room Rental
          <br />
          in Battambong City
        </h1>
        <p class="text-lg lg:text-xl text-gray-600">
          Don't deny yourself the pleasure of driving the best premium cars from
          around the world here and now
        </p>
        <div class="mt-7">
          <button
            class="flex items-center justify-center w-full lg:w-auto bg-black text-white py-3 px-6 rounded-md shadow-md hover:bg-gray-800"
          >
        
            Contact Us
          </button>
        </div>
      </div>

      <!-- Image Section -->
      <div class="lg:w-1/2 mt-8 lg:mt-0" data-aos="fade-left">
        <img
          src="../../../../public/assets/renthouse.jpg"
          alt="Premium house"
          class="w-full h-auto object-cover rounded-lg"
        />
      </div>

      <!-- Background map overlay (optional) -->
      <div class="absolute inset-0 z-[-1] opacity-30">
        <!-- You can add an SVG or an image for the background map here -->
        <img
          src="map-overlay.png"
          class="w-full h-full object-cover"
          alt="Map Background"
        />
      </div>
    </div>
    <!-- section two -->
    <div class="container mx-auto p-6 space-y-12" data-aos="zoom-in-up">
      <!-- Featured Listings Section -->
      <section class="space-y-8">
        <div class="flex justify-between items-center">
          <h2 class="text-xl font-bold">Featured Listings</h2>
          <div class="flex space-x-2">
            <!-- Pagination Indicators -->
            <button class="h-2 w-2 bg-gray-300 rounded-full"></button>
            <button class="h-2 w-2 bg-gray-500 rounded-full"></button>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Listing 1 -->
          <div class="relative">
            <img
              src="../../../../public/assets/room/room1.jpeg"
              alt="The Domain"
              class="w-full rounded-lg object-cover"
            />
            <div class="absolute bottom-4 left-4 text-white">
              <p class="text-lg font-semibold">The Domain</p>
              <span class="bg-white text-black rounded-full px-2 py-1"
                >For Sale</span
              >
            </div>
          </div>

          <!-- Listing 2 -->
          <div class="relative">
            <img
              src="../../../../public/assets/room/room2.jpeg"
              alt="Gray Home"
              class="w-full rounded-lg object-cover"
            />
            <div class="absolute bottom-4 left-4 text-white">
              <p class="text-lg font-semibold">Gray Home</p>
              <span class="bg-white text-black rounded-full px-2 py-1"
                >For Sale</span
              >
            </div>
          </div>

          <!-- Listing 3 -->
          <div class="relative">
            <img
              src="../../../../public/assets/room/room3.jpeg"
              alt="Space Hub"
              class="w-full rounded-lg object-cover"
            />
            <div class="absolute bottom-4 left-4 text-white">
              <p class="text-lg font-semibold">Space Hub</p>
              <span class="bg-white text-black rounded-full px-2 py-1"
                >Rental</span
              >
            </div>
          </div>
        </div>
      </section>

      <!-- Client Testimonials Section -->
      <section class="space-y-8" data-aos="zoom-in-left">
        <div class="flex justify-between items-center">
          <h2 class="text-xl font-bold">What our clients say</h2>
          <div class="flex space-x-2">
            <!-- Pagination Indicators -->
            <button class="h-2 w-2 bg-gray-300 rounded-full"></button>
            <button class="h-2 w-2 bg-gray-500 rounded-full"></button>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
          <!-- Testimonial 1 -->
          <div class="flex flex-col items-center text-center">
            <img
              src="../../../../public/assets/clients/client1.png"
              alt="Client 1"
              class="w-24 h-24 rounded-full object-cover mb-4"
            />
            <p class="text-sm italic">
              "I was a bit nervous about the homebuying process, but Urban
              provided invaluable support."
            </p>
            <h3 class="mt-2 font-semibold">John Smith</h3>
            <p class="text-gray-500">Journeyman</p>
          </div>

          <!-- Testimonial 2 -->
          <div class="flex flex-col items-center text-center">
            <img
              src="../../../../public/assets/clients/client2.jpeg"
              alt="Client 2"
              class="w-24 h-24 rounded-full object-cover mb-4"
            />
            <h3 class="mt-2 font-semibold">Jeremiah Graff</h3>
            <p class="text-gray-500">School Teacher</p>
          </div>

          <!-- Testimonial 3 -->
          <div class="flex flex-col items-center text-center">
            <img
              src="../../../../public/assets/clients/client3.jpeg"
              alt="Client 3"
              class="w-24 h-24 rounded-full object-cover mb-4"
            />
            <h3 class="mt-2 font-semibold">Jenny Buckler</h3>
            <p class="text-gray-500">Doctor</p>
          </div>
        </div>
      </section>
    </div>
    <!-- footer -->
    <Footer />
  </Frontend>
</template>

<script setup>
import Frontend from "@/Layouts/FrontendLayout.vue";
import Footer from "@/Components/footer.vue";
import AOS from 'aos';
import { onMounted } from "vue"

onMounted(() => {
  AOS.init();
});
</script>

<style scoped>
</style>