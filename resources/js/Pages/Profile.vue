<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import UpCenter from '@/Components/UpCenter.vue';
import PostPhoto from '@/Components/PostPhoto.vue';
import PostStatus from '@/Components/PostStatus.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props  = defineProps({
    'user': Object,
    'posts': Array,
});

</script>

<template>
    <MainLayout class="-ml-[15px]">
        <template #content>
            <UpCenter></UpCenter>
                <div class="items-center w-150">

                    <!-- Bio section -->
                    <div class="w-full p-5 bg-neutral-50 rounded-bo drop-shadow-sm mt-28">

                        <div class="flex w-full justify-center">
                            <img class="absolute -mt-24 w-32 rounded-full border-8 border-neutral-50" :src="props.user.avatar" alt="profilePhoto">
                        </div>

                        <div>
                            <div class="flex justify-between items-center">
                                <h3 :class="{
                                    '-mr-0.5': $page.url == '/profile'}" class="mt-8 py-2 pr-2 whitespace-nowrap text-2xl font-medium font-rem text-zinc-900">
                                    {{ props.user.name }}
                                </h3>
                                <PrimaryButton class="flex px-5 h-fit mt-8 mr-1">Follow</PrimaryButton>
                            </div>
                            <p class="font-Man w-96">{{ props.user.bio }}</p>
                        </div>

                    </div>

                    <!-- Profile timeline -->
                    <div>
                        <div v-for="post in props.posts">
                            <template v-if="post.photos.length > 0">
                                <PostPhoto :post="post" />
                            </template>

                            <template v-else>
                                <PostStatus :post="post" />
                            </template>

                        </div>
                    </div>
                </div>
            </template>
    </MainLayout>
</template>
