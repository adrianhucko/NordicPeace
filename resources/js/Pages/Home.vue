<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import UpCenter from '@/Components/UpCenter.vue'
import PostPhoto from '@/Components/PostPhoto.vue'
import PostStatus from '@/Components/PostStatus.vue'
import Post2 from '@/Components/Post2.vue'
import SuggestedPeople from '@/Components/SuggestedPeople.vue'
import SearchBar from '@/Components/SearchBar.vue'

const props = defineProps({
    'posts': Array,
});

</script>

<template>
    <MainLayout>
        <template #content>
            <UpCenter></UpCenter>
            <div v-for="post in props.posts">
                <template v-if="post.photos.length > 0">
                    <PostPhoto :post="post" />
                </template>

                <template v-else>
                    <PostStatus :post="post" />
                </template>

            </div>
<!--            <PostPhoto></PostPhoto>-->
<!--            <PostStatus></PostStatus>-->
<!--            <Post2></Post2>-->
        </template>

        <template #suggestions>
            <div class="flex flex-col mt-0.5 sticky top-[79px]">
                <SearchBar></SearchBar>
                <SuggestedPeople></SuggestedPeople>
            </div>
        </template>
    </MainLayout>

</template>
