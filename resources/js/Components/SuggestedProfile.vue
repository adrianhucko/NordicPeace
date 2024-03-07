<script setup>

</script>

<template>
    <a class="flex relative bg-neutral-50 hover:bg-zinc-200 transition duration-100 rounded-full items-center">
        <div class="w-10 h-10 rounded-full overflow-hidden bg-center m-2">
            <img src="/img/robert-godwin-cdksyTqEXzo-unsplash.jpg" alt="profilePhoto">
        </div>
        <div class="flex flex-col font-rem">
            <h4 class="text-sm text-zinc-800 font-normal -mb-1">Jonne Kinnunen</h4>
            <p class="text-xs text-zinc-400 font-normal">3 people following</p>
        </div>
        <div class="flex absolute right-0 items-center bg-neutral-800 rounded-full py-1.5 px-2 mr-4 text-neutral-50 text-xs font-rem shadow hover:bg-teal-500 transition duration-100 ease-in-out;">
            <button>Follow</button>
        </div>
    </a>
</template>