<script setup>
    import CommentLike from '@/Components/CommentLike.vue'
    import CommentPhoto from '@/Components/CommentPhoto.vue'
    import { Link } from '@inertiajs/vue3';

    const props = defineProps({
        comment: Object
    })

</script>

<template>
    <!-- {{ props.comment }} -->
    <CommentPhoto :comment="props.comment"></CommentPhoto>
    <div class="flex w-full justify-between font-rem mt-1 ml-4">
        <div class="flex justify-start -mt-1.5">
            <Link class="mr-1.5 text-neutral-800 text-base" :href="route('profile', props.comment.user)">{{ props.comment.user.name }}</Link>
            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                <p class="mr-1.5">•</p>
                <p class="mt-[1px]">{{ props.comment.created_at }}</p>
            </div>
        </div>

        <CommentLike></CommentLike>
    </div>
</template>
