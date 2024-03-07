<script setup>

</script>

<template>
    <button class="MessagesButton flex group items-center shadow rounded-bo bg-neutral-50 hover:bg-teal-500 transition duration-100 ease-in-out py-2 px-3">
        <svg class="w-7 h-full items-center transition duration-100 ease-in-out" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Messages">
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out;" id="Rectangle 1" d="M4.57141 13.7143C4.57141 13.5816 4.57141 13.5153 4.57211 13.4592C4.63298 8.57646 8.57644 4.633 13.4592 4.57213C13.5153 4.57143 13.5816 4.57143 13.7143 4.57143V4.57143C13.8469 4.57143 13.9132 4.57143 13.9693 4.57213C18.8521 4.633 22.7955 8.57646 22.8564 13.4592C22.8571 13.5153 22.8571 13.5816 22.8571 13.7143V19.5325C22.8571 20.7704 22.8571 21.3894 22.5926 21.8512C22.4158 22.1599 22.1599 22.4158 21.8512 22.5926C21.3894 22.8571 20.7704 22.8571 19.5324 22.8571H13.7143C13.5816 22.8571 13.5153 22.8571 13.4592 22.8564C8.57644 22.7956 4.63298 18.8521 4.57211 13.9693C4.57141 13.9132 4.57141 13.8469 4.57141 13.7143V13.7143Z" stroke-width="2"/>
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out;" id="Vector 7" d="M10.2858 12.5714L17.1429 12.5714" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path class="stroke-zinc-700 group-hover:stroke-neutral-50 transition duration-100 ease-in-out;" id="Vector 8" d="M13.7142 17.1429H17.1428" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
        </svg>
        <p class="text-sm font-rem font-medium mx-1 text-zinc-700 group-hover:text-neutral-50 transition duration-100 ease-in-out ">
            <slot />
        </p>
    </button>
</template>

