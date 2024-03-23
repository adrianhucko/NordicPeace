<script setup>
import { Link } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
    active: Boolean
});
</script>

<template>
    <Link class="px-5 flex w-fit items-center rounded-bo shadow bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out mt-2 group">
        <template #default>
            <slot name="icon"></slot>
            
            <p class="font-rem font-normal text-xl text-zinc-800 pl-1.5 py-3 group-hover:text-neutral-50 transition duration-100 ease-in-out" 
            :class="{'font-semibold text-zinc-900': active}">
                <slot />
            </p>
        </template>
    </Link>
</template>


