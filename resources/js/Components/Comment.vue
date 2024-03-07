<script setup>
    import CommentHead from '@/Components/CommentHead.vue'
    import CommentReplyBtn from '@/Components/CommentReplyBtn.vue'
    import CommentReplies from '@/Components/CommentReplies.vue'
</script>

<template>
    <div class="mb-0">
        <div class="flex">
            <CommentHead></CommentHead>
        </div>
        <div class="ml-[72px]">
            <p class="w-105 font-Man font font-light -mt-1 ml-4">
                Jujubes toffee pie lollipop lollipop donut halvah macaroo
                gingerbread.
            </p>
            <div class="flex justify-between">
                <CommentReplyBtn></CommentReplyBtn>
                <CommentReplies></CommentReplies>
            </div>
        </div>
    </div>
</template>