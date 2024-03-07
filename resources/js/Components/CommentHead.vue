<script setup>
    import CommentLike from '@/Components/CommentLike.vue'
    import CommentPhoto from '@/Components/CommentPhoto.vue'
</script>

<template>
    <CommentPhoto></CommentPhoto>
    <div class="flex w-full justify-between font-rem mt-2 ml-4">
        <div class="flex justify-start">
            <a class="mr-1.5 text-neutral-800 text-base" href="#">Kristine Larsen</a>
            <div class="Time flex mr-1.5 text-neutral-500 text-sm mt-0.5">
                <p class="mr-1.5">•</p>
                <p class="mt-[1px]">30 m</p>
            </div>
        </div>

        <!-- ??????? -->
        <CommentLike></CommentLike>

        

    </div>
</template>