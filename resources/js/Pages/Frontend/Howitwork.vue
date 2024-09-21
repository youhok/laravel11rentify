<template>
  <Frontend>
    <div class="bg-white text-center py-10">
      <!-- Main section -->
      <div class="max-w-5xl mx-auto px-4 lg:px-0">
        <!-- Title Section -->
        <h1 class="text-4xl lg:text-6xl font-bold mb-6">How it works?</h1>
        <p class="text-gray-600 text-lg mb-8">
          Over 1.5 million aggregated hotel ratings allow you to find out more
          about where you're travelling.
        </p>
        <a
          href="#"
          class="text-primary-500 font-semibold text-lg flex items-center justify-center"
        >
          Explore App <span class="ml-2">&rarr;</span>
        </a>
      </div>

      <!-- Images and Info Section -->
      <div class="flex flex-col lg:flex-row justify-center items-center mt-10">
        <!-- Left Image -->
        <div class="lg:w-1/3 w-2/3 mb-6 lg:mb-0" data-aos="zoom-in-down">
          <img
            src="../../../../public/assets/app/app3.jpg"
            alt="image-left"
            class="rounded-lg w-full"
          />
        </div>

        <!-- Text Block -->
        <div class="lg:w-1/3 px-6 text-center lg:text-left mb-6 lg:mb-0">
          <h3 class="text-2xl font-bold mb-3">
            Explore all the beautiful places
          </h3>
          <p class="text-gray-600 text-lg">
            Stay where you want, when you want, at low cost.
          </p>
        </div>

        <!-- Right Image -->
        <div class="lg:w-1/3 w-2/3" data-aos="zoom-in-left">
          <img
            src="../../../../public/assets/app/app4.png"
            alt="image-right"
            class="rounded-lg w-full"
          />
        </div>
      </div>

      <!-- Stats Section -->
      <div class="flex justify-center items-center mt-10 space-x-8">
        <div class="text-center">
          <h3 class="text-3xl font-bold">12k+</h3>
          <p class="text-gray-600 text-lg">Happy Customers</p>
        </div>
        <div class="text-center">
          <h3 class="text-3xl font-bold">1228+</h3>
          <p class="text-gray-600 text-lg">Villa & Rooms Listed</p>
        </div>
      </div>
    </div>

    <!-- Section Two -->
    <div class="bg-white py-12">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- First Card -->
        <div class="flex flex-col lg:flex-row items-center mb-12">
          <!-- Responsive Video on the left -->
          <div class="w-full lg:w-1/2 mb-6 lg:mb-0">
            <div class="relative overflow-hidden pb-[56.25%] h-0" data-aos="zoom-in-right">
              <!-- 16:9 Aspect Ratio -->
              <iframe
                class="absolute top-0 left-0 w-full h-full rounded-lg"
                src="https://www.youtube.com/embed/vDMyIZ2nsS0?si=9ouwQVc9UvI72YV3"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
          </div>
          <!-- Text on the right -->
          <div class="w-full lg:w-1/2 lg:pl-8 text-center lg:text-left" data-aos="zoom-out">
            <p class="text-lg text-gray-600 mb-4">
              A rental app is a digital platform designed to streamline the
              process of renting various types of properties, such as homes,
              vacation rentals, Room, or equipment. It provides users with a
              convenient way to search, book, and manage rentals through a
              mobile or web interface.
            </p>
            <a href="#" class="text-lg text-primary-500 font-semibold">
              Video App &rarr;
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <Footer />
  </Frontend>
</template>

<script setup>
import Footer from "@/Components/footer.vue";
import Frontend from "@/Layouts/FrontendLayout.vue";
import AOS from 'aos';
import { onMounted } from "vue"
onMounted(() => {
  AOS.init();
});
</script>

<style scoped>
</style>