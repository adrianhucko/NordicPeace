<script setup>

    const props = defineProps({
        comment: Object
    })

</script>

<template>
    <a class="w-14 h-12 -mt-3 ml-6.4 rounded-full" href="#">
        <img 
            class="w-full h-full object-cover rounded-full outline outline-4 outline-stone-300" 
            src="" 
            alt="profilePhoto">
    </a>
    <!-- {{ props.comment }} -->
</template>