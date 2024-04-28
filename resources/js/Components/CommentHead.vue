<script setup>
    import CommentLike from '@/Components/CommentLike.vue'
    import CommentPhoto from '@/Components/CommentPhoto.vue'

    const props = defineProps({
        comment: Object
    })

</script>

<template>
    <!-- {{ props.comment }} -->
    <CommentPhoto :comment="props.comment"></CommentPhoto>
    <div class="flex w-full justify-between font-rem mt-1 ml-4">
        <div class="flex justify-start -mt-1.5">
            <a class="mr-1.5 text-neutral-800 text-base" href="#">{{ props.comment.user.name }}</a>
            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                <p class="mr-1.5">•</p>
                <p class="mt-[1px]">{{ props.comment.created_at_for_humans }}</p>
            </div>
        </div>

        <CommentLike></CommentLike>



    </div>
</template>
