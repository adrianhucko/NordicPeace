<script setup>
    import PostHeader from '@/Components/PostHeader.vue'
    import PostOptions from '@/Components/PostOptions.vue'
    import PostLikes from '@/Components/PostLikes.vue'
    import PostButtons from '@/Components/PostButtons.vue'
</script>

<template>
    <div class="flex flex-col w-150 mt-12 bg-neutral-50 rounded-bo">
        <PostHeader></PostHeader>
        <div class="Status flex justify-center">
            <p class="font-Man mt-3 font-normal text-[17px] w-120 ml-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <PostLikes></PostLikes>
        <PostButtons></PostButtons>
    </div>
</template>