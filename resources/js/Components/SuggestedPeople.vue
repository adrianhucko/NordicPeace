<script setup>
    import SuggestedProfile from '@/Components/SuggestedProfile.vue'
</script>

<template>
    <div class="SuggestedPeople bg-neutral-50 rounded-bo mt-3.5">
        <h3 class="font-rem font-normal text-lg text-zinc-600 px-2 mx-3 mt-2 -mb-1">Suggested people</h3>
        <div class="mb-4 mt-2.5 px-2">
            <SuggestedProfile></SuggestedProfile>
            <SuggestedProfile></SuggestedProfile>
            <SuggestedProfile></SuggestedProfile>
        </div>
    </div>
</template>