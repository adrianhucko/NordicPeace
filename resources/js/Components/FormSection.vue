<script setup>
import { computed, useSlots } from 'vue';

defineEmits(['submitted']);

const hasActions = computed(() => !! useSlots().actions);
</script>

<template>
    <!-- <div class="md:grid md:grid-cols-3 md:gap-6"> -->
    <div class="w-100">
        
        <!-- <div class="mt-5 md:mt-0 md:col-span-2"> -->
            <form @submit.prevent="$emit('submitted')">
                
                <div class="px-6 py-6 bg-white shadow rounded-t-bo">  
                    <!-- :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'" -->
                    <div class="w-full pr-12">
                        <!-- <div class="grid grid-cols-6 gap-6"> -->
                            <slot name="form" />
                            <!-- </div> -->
                        </div>
                </div>
                
                <div v-if="hasActions" class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right shadow rounded-b-bo">
                    <slot name="actions" />
                </div>
            </form>
        </div>
    <!-- </div> -->
        
    <!-- </div> -->
</template>
