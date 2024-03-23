<script setup>
import SectionTitle from './SectionTitle.vue';
</script>

<template>
    <div class="">
        <SectionTitle>
            <template #title>
                <slot name="title" />
            </template>
            <template #description>
                <slot name="description" />
            </template>
        </SectionTitle>

        <div class="mt-5 w-[600px] md:mt-0 md:col-span-2">
            <div class="px-4 py-5 sm:p-6 bg-white shadow rounded-bo">
                <slot name="content" />
            </div>
        </div>
    </div>
</template>
