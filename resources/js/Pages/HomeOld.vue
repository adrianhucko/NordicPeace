<script setup>
    import HomeButton from '@/Components/HomeButton.vue'
    import ProfileButton from '@/Components/ProfileButton.vue'
    import SavedButton from '@/Components/SavedButton.vue'
    import Logo from '@/Components/Logo.vue'
    import UpCenter from '@/Components/UpCenter.vue'
    import MessagesButton from '@/Components/MessagesButton.vue'
    import NotifButton from '@/Components/NotifButton.vue'
    import SettingsButton from '@/Components/SettingsButton.vue'
    import SearchBar from '@/Components/SearchBar.vue'
    import SuggestedPeople from '@/Components/SuggestedPeople.vue'
    import SuggestedProfile from '@/Components/SuggestedProfile.vue'
    import PostPhoto from '@/Components/PostPhoto.vue'
    import PostStatus from '@/Components/PostStatus.vue'
    import Post2 from '@/Components/Post2.vue'
    // import { Link } from '@/inertiajs/inertia-vue3';

    // export default {
    //     components: { Link },
    // };
    
</script>

<template>
    <div class="flex justify-center mt-8">

        <div class="Left mt-5">
            <Logo class="w-66 sticky top-8"></Logo>
            <div class="-mt-1 sticky top-24">
                <ProfileButton href="profile">Jonne Kinnunen</ProfileButton>
                <HomeButton>Home</HomeButton>
                <SavedButton>Saved</SavedButton>
            </div>
        </div>

        <div class="Center mb-20 mx-8">
            <UpCenter></UpCenter>
            <PostPhoto></PostPhoto>
            <PostStatus></PostStatus>

            <Post2></Post2>
        </div>        

        <div class="Right flex flex-col relative w-66 mt-10">
            <div class="flex sticky top-[34px]">
                <MessagesButton>Messages</MessagesButton>
                <NotifButton></NotifButton>
                <SettingsButton></SettingsButton>
            </div>
            <div class="flex flex-col mt-0.5 sticky top-[79px]">
                <SearchBar></SearchBar>
                <SuggestedPeople></SuggestedPeople>
            </div>
        </div>
    </div>
    </template>