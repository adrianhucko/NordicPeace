<script setup>

const props = defineProps({
    photos: Array,
});
</script>

<template>
    <div class="flex mt-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory rtl">
        <img 
            v-for="photo in photos"
            class="w-75 h-96 rounded-bo shadow object-cover snap-always snap-center mx-3"
            :src="photo.url" 
            alt="photo"
        >
    </div>
</template>