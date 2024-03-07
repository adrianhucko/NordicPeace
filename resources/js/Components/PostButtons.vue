<script setup>
    import LikeButton from '@/Components/LikeButton.vue'
    import CommentButton from '@/Components/CommentButton.vue'
    import ShareButton from '@/Components/ShareButton.vue'
</script>

<template>
    <div class="PostButtons flex ml-12 -mb-6 -mt-9 pb-1.5">
        <LikeButton></LikeButton>
        <CommentButton></CommentButton>
        <ShareButton></ShareButton>
    </div>

</template>