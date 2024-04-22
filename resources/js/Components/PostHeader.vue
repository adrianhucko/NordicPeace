<script setup>
    import PostOptions from '@/Components/PostOptions.vue'

    const props = defineProps({
        post: Object
    })
</script>

<template>
    <div class="flex w-full ml-6 pt-6">
        <a class="rounded-full" href="#">
            <img class="w-[57px] h-12 object-cover rounded-full" src="/img/Screenshot 2023-09-19 at 11.32.08.png" alt="profilePhoto">
        </a>
        <div class="flex justify-between w-full mr-12">
            <div class="NameTime font-rem ml-2.5">
                <a href="#">
                    <p class="text-lg text-black">{{ props.post.user.name }}</p>
                </a>
                <div class="text-xs text-neutral-500">{{ props.post.created_at_for_humans }}</div>
            </div>
            <PostOptions></PostOptions>
        </div>
    </div>
</template>