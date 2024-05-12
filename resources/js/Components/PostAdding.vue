<script setup>
import PostUploadButton from '@/Components/PostUploadButton.vue'
import AddPhotoButton from '@/Components/AddPhotoButton.vue'
import {router, useForm, usePage} from "@inertiajs/vue3";
import vueFilePond, { setOptions } from 'vue-filepond';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.esm.js';
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';
import {ref} from "vue";

const form = useForm({
    body: '',
    photos: []
});


setOptions({
    credits: false,
    labelIdle: 'Pretiahnite sem súbor alebo ho <span class="filepond--label-action"> Vložte </span>',
    acceptedFileTypes: ['image/*'],
    server: {
        url: '/filepond',
        headers: {
            'X-CSRF-TOKEN': usePage().props.csrf_token,
        }
    }
})

// Create FilePond component
const FilePond = vueFilePond(FilePondPluginFileValidateType, FilePondPluginImagePreview);
const pond = ref(null);

function submit() {
    form.post(route('posts.store'), {
        onSuccess: () => {
            form.reset()
            pond.value.removeFiles()
        }
    });
}

function addPhoto(error, file) {
    form.photos.push(file.serverId)
}

function removePhoto(error, file) {
    form.photos = pond.value.getFiles().map(file => file.serverId)
}

</script>

<template>
    <div class="flex flex-col w-150 mt-12 p-6 bg-neutral-50 rounded-bo shadow-sm">
        <label class="font-rem font-medium text-xl">Add new post</label>
        <form @submit.prevent="submit">
            <textarea v-model="form.body" class="w-full resize-none scrollbar-hide mb-2 mt-2 bg-neutral-50 font-Man font-semibold text-neutral-700 outline-none placeholder:opacity-80" type="text" placeholder="Send out your thoughts..
            " rows="4"></textarea>

            <file-pond
                ref="pond"
                :allow-multiple="true"
                accepted-file-types="image/*"
                :max-files="10"
                @processfile="addPhoto"
                @removefile="removePhoto"
            />
            <label class="flex justify-end -mt-4 mb-2 text-s" for="">Maximum size 2 MB</label>

            <div class="flex items-center justify-end">
                <AddPhotoButton class="mr-[1px] -mb-[8px]"></AddPhotoButton>
                <h1 class="mr mb-[2px] font-rem font-normal text-neutral-200 text-xl">|</h1>
                <PostUploadButton class="ml-[1px]">Add post</PostUploadButton>
            </div>
        </form>

    </div>
</template>
