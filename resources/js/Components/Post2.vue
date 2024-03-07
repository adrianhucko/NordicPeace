<script setup>
    import PostStatus from '@/Components/PostStatus.vue'
    import CommentInput from '@/Components/CommentInput.vue'
    import Comment from '@/Components/Comment.vue'
    import CommentReply from '@/Components/CommentReply.vue'
</script>

<template>
    
    <div class="flex flex-col bg-stone-300 mt-12 rounded-bo">
        <div class="-mt-12">
            <PostStatus></PostStatus>
        </div>
        <!-- Comment Section -->
        <div class="-mt-7 pb-6 rounded-bo2">
            <CommentInput></CommentInput>

            <div class="flex flex-col bg-neutral-50 mt-8 mx-6 rounded-bo-sm">
                <Comment></Comment>
            </div>

            <div class="flex flex-col bg-neutral-50 mt-8 mx-6 rounded-bo-sm">
                <Comment></Comment>
                <!-- CommentReplies -->
                <div class="mt-6 ml-[88px]">
                    <CommentReply></CommentReply>
                    <CommentReply></CommentReply>
                </div>
            </div>            
        </div>
    </div>
</template>