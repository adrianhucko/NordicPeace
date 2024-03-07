<script setup>
import HomeButton from '@/Components/HomeButton.vue'
import ProfileButton from '@/Components/ProfileButton.vue'
import SavedButton from '@/Components/SavedButton.vue'
import Logo from '@/Components/Logo.vue'
import MessagesButton from '@/Components/MessagesButton.vue'
import NotifButton from '@/Components/NotifButton.vue'
import SettingsButton from '@/Components/SettingsButton.vue'
import { Link } from '@inertiajs/vue3'


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
            <slot name="content"></slot>
        </div>

        <div class="Right flex flex-col relative w-66 mt-10">
            <div class="flex sticky top-[34px] z-10">
                <MessagesButton>Messages</MessagesButton>
                <NotifButton></NotifButton>
                <SettingsButton></SettingsButton>
            </div>
            <slot name="suggestions"></slot>
        </div>
    </div>
</template>
