<template>
  <Frontend>
    <div class="flex flex-col items-center justify-center text-center mt-8">
      <!-- Text Section -->
      <div>
        <h2 class="text-lg uppercase font-semibold text-gray-500 mb-2">
          Who We Are
        </h2>
        <h1 class="text-6xl font-bold mb-4">About SangkaeStay</h1>
      </div>
    </div>
    <div class="container mx-auto px-4 py-12">
      <!-- Section: About -->
      <div class="flex flex-col lg:flex-row items-center lg:items-start">
        <!-- Image Section -->
        <div class="w-full lg:w-1/2" data-aos="fade-down-right">
          <img
            src="../../../../public/assets/aboutUs/aboutUs.jpg"
            alt="Group at poolside"
            class="rounded-lg shadow-lg w-full h-auto object-cover"
          />
        </div>

        <!-- Text Section -->
        <div class="w-full lg:w-1/2 lg:pl-12 mt-8 lg:mt-0" data-aos="fade-down-left">
          <h2 class="text-lg uppercase font-semibold text-gray-500 mb-2 mt-10">
            This is 
          </h2>
          <h1 class="text-4xl font-bold mb-4">Our Information</h1>
          <p class="text-gray-600 mb-6 " >
            Tincidunt amattis utac massa ut auctor a vitae eu orci montes semper
            pretium, massa vulputate urna tincidunt augue dolor amet oseed vitae
            eros porta commodo duis pellentesque enim molestie enim commodo
            dignissim.
          </p>
          <a
            href="#explore-rooms"
            class="inline-block px-6 py-3 bg-black text-white text-sm font-medium rounded-lg hover:bg-gray-800 transition"
          >
            Explore Rooms →
          </a>
        </div>
      </div>
    </div>
    <!-- section two -->
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col lg:flex-row items-center lg:items-start">
        <!-- Text Section -->
        <div class="w-full lg:w-1/2 " data-aos="zoom-in">
          <h2 class="text-4xl font-bold">Our Story</h2>
          <p class="text-gray-600 mb-4 mt-12">
            Tempor pulvinar elementum faucibus at eleifend. Massa tellus quam
            odio elementum ultricies quam curabitur. Est elit sed maecenas
            interdum in interdum sed. Turpis.
          </p>
          <p class="text-gray-600">
            Magna mauris, aliquam vulputate non est ut ipsum amet ornare
            accumsan sit eget scelerisque miut sollicitudin fringilla pretium
            diam tincidunt habitant iaculis vulputate est vulputate aliquam
            ornareut massa ultricies vestibulum risus consectetur nisi sit elit
            leo sagittis eget.
          </p>
        </div>

        <!-- Image Section -->
        <div class="w-full lg:w-1/2 mt-8 lg:mt-0 lg:pl-12" data-aos="zoom-in-up">
          <img
            src="../../../../public/assets/aboutUs/OurStory.jpg"
            alt="Group of hikers"
            class="rounded-lg shadow-lg w-full h-auto object-cover"
          />
        </div>
      </div>
    </div>

    <!-- section three -->

    <section class="bg-orange-100 py-16 mt-12">
      <div class="max-w-7xl mx-auto px-4">
        <!-- Grid Layout -->
        <div
          class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center"
        >
          <!-- Stat 1 -->
          <div>
            <p class="text-5xl font-bold text-gray-900">12k</p>
            <p class="text-lg text-gray-600">Happy Customers</p>
          </div>

          <!-- Stat 2 -->
          <div>
            <p class="text-5xl font-bold text-gray-900">128</p>
            <p class="text-lg text-gray-600">Resorts Listed</p>
          </div>

          <!-- Stat 3 -->
          <div>
            <p class="text-5xl font-bold text-gray-900">2.4k</p>
            <p class="text-lg text-gray-600">Villa Listed</p>
          </div>

          <!-- Stat 4 -->
          <div>
            <p class="text-5xl font-bold text-gray-900">15</p>
            <p class="text-lg text-gray-600">Worldwide Offices</p>
          </div>
        </div>
      </div>
    </section>

    <!-- section four -->

    <div class="flex flex-col items-center justify-center text-center mt-12">
      <!-- Text Section -->
      <div>
        <h2 class="text-lg uppercase font-semibold text-gray-500 mb-2">
            REVIEWS
        </h2>
        <h1 class="text-6xl font-bold mb-4">Happy Customers</h1>
      </div>
    </div>


    <!-- Container -->
    <div class="max-w-7xl mx-auto p-4 mt-12 mb-10">
      <!-- Grid Layout -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-right">
        <!-- Left Image Section -->
        <div class="space-y-4">
          <img
            src="../../../../public/assets/aboutUs/mycustomer2.jpg"
            alt="Image 1"
            class="w-full h-auto object-cover rounded-lg"
          />
          <p class="text-gray-700">
            Magna mauris, aliquam vulputate non est ut. Ipsum amet ornare
            accumsan sit eget scelerisque miut sollicitudin fringilla pretium
            diam tincidunt habitant iaculis vulputate est vulputate aliquam
            ornareut massa ultricies vestibulum risus consectetur nisi sit elit
            leo sagittis eget.
          </p>
        </div>

        <!-- Right Text and Image Section -->
        <div class="space-y-4" data-aos="fade-left">
          <p class="text-gray-700">
            Nulla aliquam faucibus pharetra adipiscing consectetur donec porta
            dolorut nunc proin aliquet diam fringillante nascetur tristique
            gravida utnon risus nunc leo ultrices ipsum mattis orcia viverra
            diam.
          </p>
          <img
            src="../../../../public/assets/aboutUs/mycustomer.jpg"
            alt="Image 2"
            class="w-full h-auto object-cover rounded-lg"
          />
        </div>
      </div>
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