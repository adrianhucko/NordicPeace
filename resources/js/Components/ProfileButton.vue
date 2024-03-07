<script setup>

</script>

<template>
    <button class="flex items-center max-w-fit rounded-full p-2 mt-18 shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out;
    group" href="#">
        <img class="w-16 h-16 rounded-full " src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
        <p class="font-rem font-normal text-lg pl-3.5 pr-2 group-hover:text-neutral-50 transition duration-100 ease-in-out">
            <slot />
        </p>
    </button>
</template>
