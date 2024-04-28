<script setup>
import PostHeader from '@/Components/PostHeader.vue'
import PostOptions from '@/Components/PostOptions.vue'
import PostLikes from '@/Components/PostLikes.vue'
import PostButtons from '@/Components/PostButtons.vue'

const props = defineProps({
    post: Object
})
</script>

<template>
    <div class="flex flex-col w-150 mt-12 bg-neutral-50 rounded-bo">
        <PostHeader :post="post"></PostHeader>
        <div class="Status flex justify-center">
            <p class="font-Man mt-3 font-normal text-[17px] w-120 ml-2">{{ props.post.body }}</p>
        </div>
        <PostLikes></PostLikes>
        <PostButtons></PostButtons>
    </div>
</template>