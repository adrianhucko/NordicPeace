<script setup>
    import PostHeader from '@/Components/PostHeader.vue'
    import PostOptions from '@/Components/PostOptions.vue'
    import Gallery from '@/Components/Gallery.vue'
    import PostDescription from '@/Components/PostDescription.vue'
    import PostLikes from '@/Components/PostLikes.vue'
    import PostButtons from '@/Components/PostButtons.vue'
</script>

<template>
    <div class="flex flex-col w-150 bg-neutral-50 rounded-bo2 mt-12 mb-12">
        <div class="postBg pb-5">
            <div class="bg-neutral-300 h-[490px] rounded-t-bo2">
                <PostHeader></PostHeader>
                <Gallery></Gallery>
            </div>
        </div>
        <PostDescription></PostDescription>
        <PostLikes></PostLikes>
        <PostButtons></PostButtons>
    </div>
</template>