<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        ref="input"
        class="border-gray-300 shadow-sm bg-neutral-50 mt-1 px-3 py-3 rounded-bo focus:shadow-md font-rem font-normal text-md outline-none"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    >
</template>
