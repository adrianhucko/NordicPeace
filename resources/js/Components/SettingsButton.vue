<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';


const isOpen = ref(false);

const toggleDropdown = () => {
  isOpen.value = !isOpen.value;
};

const logout = () => {
    router.post(route('logout'));
};



</script>

<template>
    <div @click="toggleDropdown">
        <button class="left group items-center shadow rounded-full border-none bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out absolute right-0 p-1.5">
            <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50" d="M18.5397 7.7619L17.7046 12.7726C17.2831 15.3014 15.3014 17.2831 12.7726 17.7046L7.7619 18.5397C6.40826 18.7653 5.23471 17.5917 5.46032 16.2381L6.29543 11.2274C6.71691 8.69856 8.69856 6.71691 11.2274 6.29543L16.2381 5.46032C17.5917 5.23471 18.7653 6.40826 18.5397 7.7619Z" stroke-width="1.5" stroke-linecap="round"/>
                <circle class="stroke-zinc-700 group-hover:stroke-neutral-50" cx="12" cy="12" r="2" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
        </button>
        <transition
          enter-active-class="transition duration-100 ease-out"
          enter-from-class="transform translate-x-2 -translate-y-2 scale-95 opacity-0"
          enter-to-class="transform scale-100 opacity-100"
          leave-active-class="transition duration-100 ease-in"
          leave-from-class="transform scale-100 opacity-100"
          leave-to-class="transform translate-x-2 -translate-y-2 scale-95 opacity-0">

            <div v-if="isOpen" class="absolute right-0 mt-14 mr-5 w-48 p-1 font-Man font-medium text-zinc-700 bg-white rounded-xl rounded-tr shadow-xl">
                <a href="#" class="flex px-4 py-2 rounded hover:bg-teal-500 hover:text-neutral-50 transition ease-out duration-100 rounded-t-xl rounded-tr">Option 1</a>
                
                <Link :href="route('profile.show')" class="flex group items-center px-3 py-1 rounded hover:bg-teal-500 hover:text-neutral-50 transition ease-out duration-100">
                    <svg class="w-8 h-full" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out" d="M10.3879 23.8515C9.45484 23.2927 8.9883 23.0134 8.72887 22.564C8.46945 22.1147 8.46078 21.571 8.44344 20.4835L8.39585 17.5L8.44344 14.5165C8.46078 13.429 8.46945 12.8853 8.72887 12.436C8.98829 11.9866 9.45484 11.7073 10.3879 11.1485L12.9479 9.61556L15.5555 8.16502C16.506 7.63631 16.9812 7.37195 17.5 7.37195C18.0189 7.37195 18.4941 7.63631 19.4445 8.16502L22.0521 9.61556L24.6121 11.1485C25.5452 11.7073 26.0117 11.9866 26.2712 12.436C26.5306 12.8853 26.5393 13.429 26.5566 14.5165L26.6042 17.5L26.5566 20.4835C26.5393 21.571 26.5306 22.1147 26.2712 22.564C26.0117 23.0134 25.5452 23.2927 24.6121 23.8515L22.0521 25.3844L19.4445 26.835C18.4941 27.3637 18.0189 27.628 17.5 27.628C16.9812 27.628 16.506 27.3637 15.5555 26.835L12.9479 25.3844L10.3879 23.8515Z" stroke-width="2"/>
                        <circle class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out" cx="17.5" cy="17.5" r="3.125" transform="rotate(-30 17.5 17.5)" stroke-width="2"/>
                    </svg>
                    Settings
                </Link>

                <form @submit.prevent='logout'>
                    <button type="submit" class="w-full group flex items-center px-4 py-2 rounded hover:bg-red-400 hover:text-neutral-50 transition ease-out duration-100 rounded-b-xl">
                        <svg class="w-5 mr-2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-zinc-700 group-hover:fill-neutral-50" d="M2 12L1.21913 11.3753L0.719375 12L1.21913 12.6247L2 12ZM11 13C11.5523 13 12 12.5523 12 12C12 11.4477 11.5523 11 11 11V13ZM5.21913 6.3753L1.21913 11.3753L2.78087 12.6247L6.78087 7.6247L5.21913 6.3753ZM1.21913 12.6247L5.21913 17.6247L6.78087 16.3753L2.78087 11.3753L1.21913 12.6247ZM2 13H11V11H2V13Z"/>
                            <path class="stroke-zinc-700 group-hover:stroke-neutral-50" d="M10 8.13193V7.38851C10 5.77017 10 4.961 10.474 4.4015C10.9479 3.84201 11.7461 3.70899 13.3424 3.44293L15.0136 3.1644C18.2567 2.62388 19.8782 2.35363 20.9391 3.25232C22 4.15102 22 5.79493 22 9.08276V14.9172C22 18.2051 22 19.849 20.9391 20.7477C19.8782 21.6464 18.2567 21.3761 15.0136 20.8356L13.3424 20.5571C11.7461 20.291 10.9479 20.158 10.474 19.5985C10 19.039 10 18.2298 10 16.6115V16.066" stroke-width="2.5"/>
                        </svg>
                        Log out
                    </button>
                </form>
                
            </div>
        </transition>
    </div>
</template>
