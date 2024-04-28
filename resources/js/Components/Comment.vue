<script setup>
    import CommentHead from '@/Components/CommentHead.vue'
    import CommentReplyBtn from '@/Components/CommentReplyBtn.vue'
    import CommentReplies from '@/Components/CommentReplies.vue'

    const props = defineProps({
        comment: Object
    })


</script>

<template>
    <div class="pt-0 mb-5">
        <div class="flex">
            <CommentHead :comment="comment"></CommentHead>
        </div>
        <div class="ml-[72px] -mt-3">
            <p class="w-105 font-Man font font-light -mt-1 mb-3 ml-4">
                {{ props.comment.body }}
            </p>
            <div class="flex justify-between">
                <!-- <CommentReplyBtn></CommentReplyBtn> -->
                <!-- <CommentReplies></CommentReplies> -->
            </div>
        </div>
    </div>
</template>