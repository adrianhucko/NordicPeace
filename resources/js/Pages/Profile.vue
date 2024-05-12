<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import UpCenter from '@/Components/UpCenter.vue';
import PostPhoto from '@/Components/PostPhoto.vue';
import PostStatus from '@/Components/PostStatus.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import {computed, ref} from "vue";
import {usePage, Link, router} from "@inertiajs/vue3";
import { vIntersectionObserver } from '@vueuse/components'

const props  = defineProps({
    'user': Object,
    'posts': Array,
});

const isItMyProfile = computed(() => {
    return usePage().props.auth.user.id === props.user.id;
})

const amIFollowing = computed(() => {
    return usePage().props.auth.user.followed_users_ids.includes(props.user.id)
})

function follow() {
    router.post(route('followed-users.follow'), {
        followed_user_id: props.user.id
    })
}

function unfollow() {
    router.post(route('followed-users.unfollow'), {
        followed_user_id: props.user.id
    })
}

const postShowing = ref(5)

function loadMorePosts() {
    postShowing.value += 5
}

function onIntersectionObserver([{ isIntersecting }]) {
    if (isIntersecting) {
        loadMorePosts()
    }
}

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
                                <div class="flex items-center">
                                    <h3 :class="{
                                        '-mr-0.5': $page.url == '/profile'}" class="mt-8 py-2 pr-2 whitespace-nowrap text-2xl font-medium font-rem text-zinc-900">
                                    {{ props.user.name }}
                                    </h3>
                                    <!-- Blue mark -->
                                    <div v-if="props.user.blue_mark">
                                        <svg class="w-7 mt-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path class="fill-teal-600" fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM16.7682 9.64018C17.1218 9.21591 17.0645 8.58534 16.6402 8.23178C16.2159 7.87821 15.5853 7.93554 15.2318 8.35982L11.6338 12.6774C11.2871 13.0934 11.0922 13.3238 10.9366 13.4653L10.9306 13.4707L10.9242 13.4659C10.7564 13.339 10.5415 13.1272 10.1585 12.7443L8.70711 11.2929C8.31658 10.9024 7.68342 10.9024 7.29289 11.2929C6.90237 11.6834 6.90237 12.3166 7.29289 12.7071L8.74428 14.1585L8.78511 14.1993L8.78512 14.1993C9.11161 14.526 9.4257 14.8402 9.71794 15.0611C10.0453 15.3087 10.474 15.5415 11.0234 15.5165C11.5728 15.4916 11.9787 15.221 12.2823 14.9448C12.5534 14.6983 12.8377 14.3569 13.1333 14.0021L13.1333 14.0021L13.1703 13.9577L16.7682 9.64018Z"/>
                                        </svg>
                                    </div>

                                </div>
                                <template v-if="isItMyProfile">
                                    <Link :href="route('profile.show')">
                                        <PrimaryButton class="flex px-5 h-fit mt-8 mr-1">Edit Profile</PrimaryButton>
                                    </Link>
                                </template>
                                <template v-else>
                                    <template v-if="amIFollowing">
                                        <PrimaryButton @click="unfollow" class="flex px-5 h-fit mt-8 mr-1">Unfollow</PrimaryButton>
                                    </template>
                                    <template v-else>
                                        <PrimaryButton @click="follow" class="flex px-5 h-fit mt-8 mr-1">Follow</PrimaryButton>
                                    </template>
                                </template>
                            </div>
                            <p class="font-Man w-96">{{ props.user.bio }}</p>
                        </div>

                    </div>

                    <!-- Profile timeline -->
                    <div>
                        <div v-for="post in props.posts.slice(0, postShowing)">
                            <template v-if="post.photos.length > 0">
                                <PostPhoto :post="post" />
                            </template>

                            <template v-else>
                                <PostStatus :post="post" />
                            </template>

                        </div>
                    </div>
                    <span v-intersection-observer="onIntersectionObserver"/>
                </div>
            </template>
    </MainLayout>
</template>
