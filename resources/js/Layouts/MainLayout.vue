<script setup>
import { defineProps } from 'vue'
import NavButton from '@/Components/NavButton.vue'
import ProfileButton from '@/Components/ProfileButton.vue'
import SavedButton from '@/Components/SavedButton.vue'
import Logo from '@/Components/Logo.vue'
import MessagesButton from '@/Components/MessagesButton.vue'
import NotifButton from '@/Components/NotifButton.vue'
import SettingsButton from '@/Components/SettingsButton.vue'

const props = defineProps({
    active: Boolean
});
</script>



<template>
    <div class="flex justify-center mt-8">

        <div class="Left mt-5 w-72">
            <Logo class="w-66 fixed"></Logo>
            <div class="fixed mt-7">
                <ProfileButton :class="{
                    'font-medium': $page.url.startsWith('/profile')}"
                />
                        
                <NavButton href="/home" :active="$page.component == 'Home'">
                    <template #icon>
                        <svg class="w-8 -ml-1 stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out" :class="{'stroke-2': $page.component == 'Home', 'stroke-1.5': $page.component !== 'Home'}"
                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12.7596C5 11.4019 5 10.723 5.27446 10.1262C5.54892 9.52949 6.06437 9.08769 7.09525 8.20407L8.09525 7.34693C9.95857 5.7498 10.8902 4.95123 12 4.95123C13.1098 4.95123 14.0414 5.7498 15.9047 7.34693L16.9047 8.20407C17.9356 9.08769 18.4511 9.52949 18.7255 10.1262C19 10.723 19 11.4019 19 12.7596V17C19 18.8856 19 19.8284 18.4142 20.4142C17.8284 21 16.8856 21 15 21H9C7.11438 21 6.17157 21 5.58579 20.4142C5 19.8284 5 18.8856 5 17V12.7596Z"/>
                            <path d="M14.5 21V16C14.5 15.4477 14.0523 15 13.5 15H10.5C9.94772 15 9.5 15.4477 9.5 16V21"  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </template>
                    Home
                </NavButton>

                <NavButton href="/saved" :active="$page.component == 'Saved'">
                    <template #icon>
                        <svg class="w-7 -ml-1 stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out" 
                        :class="{'stroke-2.5': $page.component == 'Saved', 'stroke-2': $page.component !== 'Saved'}"
                        viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="Bookmark">
                            <path id="Rectangle 1" d="M4.33333 9.75C4.33333 6.68587 4.33333 5.15381 5.28523 4.2019C6.23713 3.25 7.7692 3.25 10.8333 3.25H15.1667C18.2308 3.25 19.7629 3.25 20.7148 4.2019C21.6667 5.15381 21.6667 6.68587 21.6667 9.75V17.1466C21.6667 20.0535 21.6667 21.5069 20.752 21.9515C19.8374 22.396 18.6945 21.4981 16.4087 19.7021L15.6772 19.1273C14.392 18.1175 13.7494 17.6126 13 17.6126C12.2506 17.6126 11.608 18.1175 10.3228 19.1273L9.59125 19.7021C7.3055 21.4981 6.16263 22.396 5.24798 21.9515C4.33333 21.5069 4.33333 20.0535 4.33333 17.1466V9.75Z"/>
                            </g>
                        </svg>
                    </template>
                    Saved
                </NavButton>
                
            </div>
        </div>

        <div class="Center mb-20 mx-8">
            <slot name="content"></slot>
        </div>

        <div class="Right flex flex-col relative w-66 mt-10">
            <div class="flex sticky top-[34px] z-10">
                <MessagesButton>Messages</MessagesButton>
                <NotifButton/>
                <SettingsButton/>
            </div>
            <slot name="suggestions"></slot>
        </div>
    </div>
</template>
