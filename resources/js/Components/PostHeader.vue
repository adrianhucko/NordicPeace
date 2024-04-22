<script setup>
    import PostOptions from '@/Components/PostOptions.vue'
    import { Link } from '@inertiajs/vue3'

    const props = defineProps({
        post: Object
    })
</script>

<template>
    <div class="flex w-full ml-6 pt-6">
        <Link class="rounded-full" :href="route('profile', props.post.user.id)">
            <img class="w-[57px] h-12 object-cover rounded-full" :src="props.post.user.avatar" alt="profilePhoto">
        </Link>
        <div class="flex justify-between w-full mr-12">
            <div class="NameTime font-rem ml-2.5">
                <Link :href="route('profile', props.post.user.id)">
                    <p class="text-lg text-black">{{ props.post.user.name }}</p>
                </Link>
                <div class="text-xs text-neutral-500">{{ props.post.created_at_for_humans }}</div>
            </div>
            <PostOptions></PostOptions>
        </div>
    </div>
</template>
