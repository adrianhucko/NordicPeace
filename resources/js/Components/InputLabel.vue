<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="block m-2 mt-4 font-rem font-medium text-md text-gray-700">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
