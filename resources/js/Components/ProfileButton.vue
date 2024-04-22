<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="route('profile', $page.props.auth.user.id)" class="flex items-center w-fit rounded-full p-2 mt-18 shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out group">
        <img class="w-16 h-16 rounded-full " :src="$page.props.auth.user.avatar" alt="profilePhoto">
        <p :class="{
            '-mr-0.5': $page.url == '/profile'}" class="whitespace-nowrap font-rem text-lg text-zinc-900 pl-3.5 pr-2 group-hover:text-neutral-50 transition duration-100 ease-in-out">
            {{ $page.props.auth.user.name }}
        </p>
    </Link>

    <!-- <button class="flex items-center max-w-fit rounded-full p-2 mt-18 shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out group" href="#">
        <img class="w-16 h-16 rounded-full " src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
        <p class="font-rem font-normal text-lg pl-3.5 pr-2 group-hover:text-neutral-50 transition duration-100 ease-in-out">
            <slot />
        </p>
    </button> -->

</template>
