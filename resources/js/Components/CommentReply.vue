<script setup>
    import CommentHead from '@/Components/CommentHead.vue'
    import CommentReplyBtn from '@/Components/CommentReplyBtn.vue'
    import CommentReplies from '@/Components/CommentReplies.vue'
    import Comment from '@/Components/Comment.vue'
    import CommentLike from '@/Components/CommentLike.vue'
    import CommentPhoto from '@/Components/CommentPhoto.vue'
    import CommentContent from '@/Components/CommentContent.vue'
</script>

<template>
    <div class="flex -ml-5.5 mb-4">
        <CommentPhoto></CommentPhoto>
        <div class="flex w-full justify-between -mt-3.5">
            <div class="flex flex-col ml-3">
                <div class="flex font-rem">

                    <a class="font-rem mr-1.5 text-neutral-800 text-base" href="#">Jonne Kinnunen</a>
                    <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                        <p class="mr-1.5">•</p>
                        <p class="mt-[1px]">1 h</p>
                    </div>

                </div>

                <CommentContent></CommentContent>

                <div class="flex -mx-4">
                    <CommentReplyBtn></CommentReplyBtn>
                </div>
            </div>
            <CommentLike></CommentLike>
        </div>
    </div>
</template>