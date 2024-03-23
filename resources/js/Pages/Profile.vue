<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import UpCenter from '@/Components/UpCenter.vue';
import PostPhoto from '@/Components/PostPhoto.vue';
</script>

<template>
    <MainLayout class="-ml-[15px]">
        <template #content>
            <UpCenter></UpCenter>
                <div class="items-center w-150">
                    
                    <!-- Bio section -->
                    <div class="w-full p-5 bg-neutral-50 rounded-bo drop-shadow-sm mt-28">

                        <div class="flex w-full justify-center">
                            <img class="absolute -mt-24 w-32 rounded-full border-8 border-neutral-50" src="/img/Screenshot 2023-08-30 at 22.35.57.png" alt="profilePhoto">
                        </div>
                        
                        <div class="">
                            kokotinka
                        </div>

                        <div>
                            <h3 :class="{
                                '-mr-0.5': $page.url == '/profile'}" class="mt-8 py-2 pr-2 whitespace-nowrap text-2xl font-medium font-rem text-zinc-900">
                                {{ $page.props.auth.user.name }}
                            </h3>
                            <p class="font-Man w-96">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic eos quam quos officiis aliquam ab.</p>
                        </div>

                    </div>

                    <!-- Profile timeline -->
                    <div>
                        <PostPhoto></PostPhoto>
                    </div>
                </div>
            </template>
    </MainLayout>
</template>