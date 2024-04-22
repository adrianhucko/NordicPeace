<script setup>
    import Comment from '@/Components/Comment.vue';
    import CommentInput from '@/Components/CommentInput.vue';

    const props = defineProps({
        post: Object,
        comments: Array
    })

</script>

<template>
    <div class="bg-zinc-300 rounded-b-bo">
        <CommentInput :post="props.post"></CommentInput>
        <div class="mt-9 mb-6 mx-6 bg-neutral-50 rounded-bo">
            <template v-for="comment in props.comments">
                <Comment :comment="comment"></Comment>
            </template>
        </div>

    </div>

</template>
