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
                                <h3 :class="{
                                    '-mr-0.5': $page.url == '/profile'}" class="mt-8 py-2 pr-2 whitespace-nowrap text-2xl font-medium font-rem text-zinc-900">
                                    {{ props.user.name }}
                                </h3>
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
