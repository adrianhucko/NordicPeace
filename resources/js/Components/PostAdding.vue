<script setup>
import PostUploadButton from '@/Components/PostUploadButton.vue'
import AddPhotoButton from '@/Components/AddPhotoButton.vue'
</script>

<template>
    <div class="flex flex-col w-150 mt-12 p-6 bg-neutral-50 rounded-bo shadow-sm">
        <label class="font-rem font-medium text-xl">Add new post</label>
        <form action="">

            <textarea for="message" class="w-full resize-none scrollbar-hide mb-2 mt-2 bg-neutral-50 font-Man font-semibold text-neutral-700 outline-none placeholder:opacity-80" type="text" placeholder="Send out your thoughts..
            " rows="4"></textarea>
            
            <div class="flex items-center justify-end">
                <AddPhotoButton class="mr-[1px] -mb-[8px]"></AddPhotoButton>
                <h1 class="mr mb-[2px] font-rem font-normal text-neutral-200 text-xl">|</h1>
                <PostUploadButton class="ml-[1px]">Add post</PostUploadButton>
            </div>
        </form>

    </div>
</template>