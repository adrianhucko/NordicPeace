<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link href="/saved" class="flex w-fit items-center group rounded-bo @apply shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out mt-2">
        <svg class="w-7 h-full ml-4 stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Bookmark">
                <path id="Rectangle 1" d="M4.33333 9.75C4.33333 6.68587 4.33333 5.15381 5.28523 4.2019C6.23713 3.25 7.7692 3.25 10.8333 3.25H15.1667C18.2308 3.25 19.7629 3.25 20.7148 4.2019C21.6667 5.15381 21.6667 6.68587 21.6667 9.75V17.1466C21.6667 20.0535 21.6667 21.5069 20.752 21.9515C19.8374 22.396 18.6945 21.4981 16.4087 19.7021L15.6772 19.1273C14.392 18.1175 13.7494 17.6126 13 17.6126C12.2506 17.6126 11.608 18.1175 10.3228 19.1273L9.59125 19.7021C7.3055 21.4981 6.16263 22.396 5.24798 21.9515C4.33333 21.5069 4.33333 20.0535 4.33333 17.1466V9.75Z" stroke-width="2"/>
            </g>
        </svg>
        <p class="font-rem text-xl pr-5 pl-2 py-3 group-hover:text-neutral-50 transition duration-100 ease-in-out">Saved</p>
    </Link>
</template>