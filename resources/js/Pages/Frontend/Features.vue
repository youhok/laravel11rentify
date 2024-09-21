<template>
  <Frontend>
    <div class="min-h-screen bg-gray-50 p-6">
      <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 mt-10" data-aos="fade-right">
        <!-- Left Section -->
        <div class="space-y-6">
          <!-- Title and Location -->
          <div>
            <h1 class="text-3xl lg:text-4xl font-semibold mt-12">Mirror House Sud</h1>
            <p class="text-gray-600">
              Bolzano, Trentino-Alto Adige/South Tyrol, Italy
            </p>
          </div>

          <!-- Price and Availability -->
          <div class="flex items-center space-x-4">
            <span class="text-2xl lg:text-3xl font-bold">$1,600</span>
            <span class="text-gray-500">/ night</span>
          </div>
          <button
            class="flex items-center justify-center w-full lg:w-auto bg-black text-white py-3 px-6 rounded-md shadow-md hover:bg-gray-800"
          >
            <svg
              class="w-6 h-6 mr-2"
              fill="currentColor"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
            >
              <path
                d="M19 3h-14c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-14c0-1.1-.9-2-2-2zm-4 18h-6v-2h6v2zm4-4h-14v-12h14v12z"
              />
            </svg>
            Check Availability
          </button>

          <!-- Room Information -->
          <div class="flex space-x-6">
            <div class="text-center">
              <svg
                class="w-6 h-6 mx-auto text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  d="M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M10 12h12M10 12l-2-2m2 2l-2 2"
                />
              </svg>
              <span class="block text-lg font-semibold">4 Guests</span>
            </div>
            <div class="text-center">
              <svg
                class="w-6 h-6 mx-auto text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  d="M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M10 12h12M10 12l-2-2m2 2l-2 2"
                />
              </svg>
              <span class="block text-lg font-semibold">2 Bedrooms</span>
            </div>
            <div class="text-center">
              <svg
                class="w-6 h-6 mx-auto text-gray-500"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  d="M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M6 12h12M6 12l-2-2m2 2l-2 2m14 0h2M10 12h12M10 12l-2-2m2 2l-2 2"
                />
              </svg>
              <span class="block text-lg font-semibold">1 Bathroom</span>
            </div>
          </div>

          <!-- Description -->
          <div>
            <p class="text-gray-600">
              Mirror Houses are two small houses immersed in a beautiful scenery
              of apple orchards just outside, in the wonderful surroundings of
              the South Tyrolean Dolomites...
            </p>
            <a href="#" class="text-blue-500 font-semibold">Show more</a>
          </div>

          <!-- Amenities -->
          <div class="grid grid-cols-2 gap-2 mt-12">
            <p class="text-gray-600">→ Kitchen</p>
            <p class="text-gray-600">→ Wi-Fi</p>
            <p class="text-gray-600">→ Free parking</p>
            <p class="text-gray-600">→ Pool</p>
            <p class="text-gray-600">→ TV</p>
            <p class="text-gray-600">→ Washer</p>
            <p class="text-gray-600">→ Air conditioning</p>
            <p class="text-gray-600">→ Hair dryer</p>
          </div>
        </div>

        <!-- Right Section (Image Gallery) -->
        <div class="space-y-6" data-aos="fade-left">
          <div class="rounded-lg overflow-hidden">
            <img
              src="../../../../public/assets/rapids.jpg"
              alt="House Image"
              class="w-full h-full object-cover"
            />
          </div>
          <div class="grid grid-cols-2 gap-4">
            <div class="rounded-lg overflow-hidden">
              <img
                src="../../../../public/assets/seaglass1.jpg"
                alt="House Image"
                class="w-full h-full object-cover"
              />
            </div>
            <div class="rounded-lg overflow-hidden">
              <img
                src="../../../../public/assets/image.jpg"
                alt="House Image"
                class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- seation two -->
     <div class="bg-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- First Card -->
        <div class="flex flex-col lg:flex-row items-center mb-12">
          <!-- Image on the left -->
          <div class="w-full lg:w-1/2 mb-6 lg:mb-0" data-aos="zoom-out-up">
            <img
              src="../../../../public/assets/app/app1.jpg"
              alt="Hotel Image"
              class="rounded-lg w-full h-auto"
            />
          </div>
          <!-- Text on the right -->
          <div class="w-full lg:w-1/2 lg:pl-8 text-center lg:text-left" data-aos="zoom-out-down">
            <p class="text-lg text-gray-600 mb-4">
              Over 1.5 million aggregated hotel ratings allow you to find out
              more about where you're travelling.
            </p>
            <a href="#" class="text-lg text-primary-500 font-semibold">
              Explore App &rarr;
            </a>
          </div>
        </div>

        <!-- Second Card -->
        <div class="flex flex-col lg:flex-row items-center">
          <!-- Image on the left -->
          <div class="w-full lg:w-1/2 order-last lg:order-first mb-6 lg:mb-0" data-aos="zoom-out-right">
            <img
              src="../../../../public/assets/app/app2.png"
              alt="Historical Place Image"
              class="rounded-lg w-full h-auto"
            />
          </div>
          <!-- Text on the right -->
          <div class="w-full lg:w-1/2 lg:pl-8 text-center lg:text-left" data-aos="zoom-out-left">
            <h3 class="text-2xl font-bold mb-2">
              Explore all the beautiful places
            </h3>
            <p class="text-lg text-gray-600 mb-4">
              Stay where you want, when you want, at low cost.
            </p>
          </div>
        </div>
      </div>
    </div>
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