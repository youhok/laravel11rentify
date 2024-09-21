<template>
  <div class="w-full text-gray-700 drop-shadow-lg bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div
      class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8"
    >
      <!-- Navbar header -->
      <div class="p-4 flex flex-row items-center justify-between">
        <a
          href="#"
          class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"
        >
          <div class="flex flex-row gap-4">
            <div>
              <ApplicationLogo class="w-10 h-10 fill-current text-gray-500" />
            </div>
            <div class="mt-2">
              <Link :href="route('myhome')">SangkaeStay</Link>
            </div>
          </div>
        </a>
        <!-- Hamburger button for small screens -->
        <button
          class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
          @click="openMenu = !openMenu"
        >
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path
              v-if="!openMenu"
              fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
              clip-rule="evenodd"
            ></path>
            <path
              v-else
              fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>
      </div>

      <!-- Main navigation links for large screens -->
      <nav
        :class="{ flex: openMenu, hidden: !openMenu }"
        class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row"
      >
        <Link
          class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
          :href="route('aboutUs')"
          >About Us</Link
        >
        <Link
          class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
          :href="route('howitWork')"
          >How It Works</Link
        >
        <Link
          class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
          :href="route('features')"
          >Features</Link
        >
        <button
          class="px-4 py-2 mt-2 text-sm font-semibold text-white bg-black rounded-lg dark-mode:bg-black dark-mode:hover:bg-gray-900 dark-mode:focus:bg-gray-900 md:mt-0 md:ml-4 hover:bg-gray-800 focus:bg-gray-800 focus:outline-none focus:shadow-outline"
        >
          Download App <i class="bi bi-apple"></i>
        </button>
      </nav>
    </div>

    <!-- Sidebar for small screens -->
    <aside
      :class="{ hidden: !openMenu, flex: openMenu }"
      class="flex  flex-col w-100 space-y-2 border-r-2 border-gray-200 bg-white p-2   md:hidden"
      style="height: 35vh;"
    >
      <Link
       :href="route('aboutUs')"
        class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600"
      >
        <span class="text-2xl"><i class="bx bx-home"></i></span>
        <span>About Us</span>
      </Link>
      <Link
        :href="route('howitWork')"
        class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600"
      >
        <span class="text-2xl"><i class="bx bx-cart"></i></span>
        <span>How It Works</span>
      </Link>
      <Link
          :href="route('features')"
        class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600"
      >
        <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
        <span>Features</span>
      </Link>
      <Link
        href="#"
        class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600"
      >
        <span class="text-2xl"><i class="bx bx-heart"></i></span>
        <span>Download App</span>
    </Link>
    </aside>
  </div>
</template>

<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";

const openMenu = ref(false);
</script>

<style scoped>
/* Add any additional styles if necessary */
</style>
