<script setup>

const props = defineProps({
    photos: Array,
});
</script>

<template>
    <div class="flex mt-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory rtl">
        <img 
            v-for="photo in photos"
            class="w-75 h-96 rounded-bo drop-shadow-sharpS mr-2.5 snap-always snap-center ml-6" 
            :src="photo.url" 
            alt="photo"
        >
    </div>
</template>