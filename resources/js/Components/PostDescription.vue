<script setup>

const props = defineProps({
    post: Object,
});
</script>

<template>
    <div class="flex">
        <p class="font-Man text-sm font-normal text-neutral-800 px-6 -mb-1">
            <span class="font-semibold">{{ post.user.name }}</span> {{ post.body }}
        </p>
    </div>
</template>