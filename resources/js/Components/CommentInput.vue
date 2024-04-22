<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    post: Object,
})

const form = useForm({
    body: '',
});

function submitComment () {
    form.transform((data) => ({
        ...data,
        post_id: props.post.id
    })).post(route('comments.store'), {
        preserveScroll: true,
    })

    form.reset()
}

</script>

<template>
     <div class="flex items-center mt-14 mx-6 bg-neutral-50 rounded-bo-sm">
        <form @submit.prevent="submitComment">

            <button class="opacity-40 focus:opacity-100" href="#">
                <img class="w-12 h-12 object-cover rounded-full ml-6.4 outline outline-4 outline-stone-300" :src="$page.props.auth.user.avatar" alt="profilePhoto">
            </button>

            <input v-model="form.body" class="ml-6 w-100 bg-neutral-50 font-Man font-semibold text-neutral-700 outline-none placeholder:opacity-80" type="text" placeholder="Post your reply..">

            <button type="submit" class="submit-btn">Submit</button>
        </form>


        <svg class="w-7 h-7 ml-3 opacity-30" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Messages">
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-200 ease-in-out" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke="#333333" stroke-width="2"/>
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-200 ease-in-out" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-200 ease-in-out" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke="#333333" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>

    </div>
</template>
