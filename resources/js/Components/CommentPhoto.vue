<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    comment: Object
})

</script>

<template>
    <Link class="w-14 h-12 -mt-3 ml-6.4 rounded-full" :href="route('profile', props.comment.user)">
        <img
            class="w-full h-full object-cover rounded-full outline outline-4 outline-stone-300"
            :src="props.comment.user.avatar"
            alt="profilePhoto">
    </Link>
    <!-- {{ props.comment }} -->
</template>
