<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="font-rem font-medium px-3 py-2 rounded-bo items-center shadow bg-neutral-50 hover:text-white hover:bg-red-600 transition duration-100 ease-in-out">
        <slot />
    </button>
</template>
