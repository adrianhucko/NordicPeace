<script setup>
import { ref } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';
import ActionMessage from '@/Components/ActionMessage.vue';
import FormSection from '@/Components/FormSection.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import TextInput from '@/Components/TextInput.vue';


const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    name: props.user.name,
    email: props.user.email,
    bio: props.user.bio,
    photo: null,
});

const verificationLinkSent = ref(null);
const photoPreview = ref(null);
const photoInput = ref(null);

const updateProfileInformation = () => {
    if (photoInput.value) {
        form.photo = photoInput.value.files[0];
    }

    form.post(route('user-profile-information.update'), {
        errorBag: 'updateProfileInformation',
        preserveScroll: true,
        onSuccess: () => clearPhotoFileInput(),
    });
};

const sendEmailVerification = () => {
    verificationLinkSent.value = true;
};

const selectNewPhoto = () => {
    photoInput.value.click();
};

const updatePhotoPreview = () => {
    const photo = photoInput.value.files[0];

    if (! photo) return;

    const reader = new FileReader();

    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };

    reader.readAsDataURL(photo);
};

const deletePhoto = () => {
    router.delete(route('current-user-photo.destroy'), {
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            clearPhotoFileInput();
        },
    });
};

const clearPhotoFileInput = () => {
    if (photoInput.value?.value) {
        photoInput.value.value = null;
    }
};
</script>

<template>
    <div class="flex justify-between w-[600px]">
        <h1 class="mt-4 font-rem text-lg">Update profile info</h1>

        <FormSection @submitted="updateProfileInformation">

            <template #form>
                <!-- Profile Photo -->
                <div v-if="$page.props.jetstream.managesProfilePhotos" class="">
                    <!-- Profile Photo File Input -->
                    <input
                    ref="photoInput"
                    type="file"
                    class="hidden"
                    @change="updatePhotoPreview"
                    >
                    
                    <InputLabel for="photo" value="Photo"/>
                    
                    <!-- Current Profile Photo -->
                    <div v-show="! photoPreview" class="mt-2">
                        <img :src="user.profile_photo_url" :alt="user.name" class="rounded-full h-20 w-20 object-cover">
                    </div>
                    
                    <!-- New Profile Photo Preview -->
                    <div v-show="photoPreview" class="mt-2">
                        <span
                        class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'' + photoPreview + '\');'"
                        />
                    </div>
                    
                    <SecondaryButton type="button" @click.prevent="selectNewPhoto">
                        Select A New Photo
                    </SecondaryButton>
                    
                    <SecondaryButton
                    v-if="user.profile_photo_path"
                    type="button"
                    @click.prevent="deletePhoto"
                    >
                    Remove Photo
                </SecondaryButton>
                
                <InputError :message="form.errors.photo" class="mt-2" />
            </div>
            
            <!-- Name -->
            <div class="">
                <InputLabel for="name" value="Name" />
                <TextInput
                id="name"
                v-model="form.name"
                type="text"
                class="mt-1 block w-full"
                required
                autocomplete="name"
                />
                <InputError :message="form.errors.name" class="mt-2" />
            </div>
            
            <!-- Email -->
            <div class="">
                <InputLabel for="email" value="Email" />
                <TextInput
                id="email"
                v-model="form.email"
                type="email"
                class="mt-1 mb-14 block w-full"
                required
                autocomplete="username"
                />
                <InputError :message="form.errors.email" class="mt-2" />
                
                <div v-if="$page.props.jetstream.hasEmailVerification && user.email_verified_at === null">
                    <p class="text-sm mt-2">
                        Your email address is unverified.
                        <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        @click.prevent="sendEmailVerification"
                        >
                        Click here to re-send the verification email.
                    </Link>
                </p>
                
                <div v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                    A new verification link has been sent to your email address.
                </div>
            </div>
            
            <InputLabel for="bio" value="Bio" class="-mb-0.5 -mt-6" />
            <textarea
            id="bio"
            v-model="form.bio"
            type="text"
            required
            class="w-full resize-none scrollbar-hide p-2 mb-2 mt-2 rounded-bo bg-neutral-100 font-Man font-medium text-neutral-700 outline-none" rows="5"
            />
        </div>
            
        <!-- Profile Photo Edit -->
        <a class="flex w-fit items-center justify-between py-2 px-3 mt-6 bg-teal-500 text-white shadow font-rem font-medium rounded-bo-sm hover:bg-teal-600 transition duration-100 ease-in-out" href="https://wordpress.com/log-in/link?client_id=1854&redirect_to=https%3A%2F%2Fpublic-api.wordpress.com%2Foauth2%2Fauthorize%3Fclient_id%3D1854%26response_type%3Dcode%26blog_id%3D0%26state%3D68ffbdb6131c8380bcbe2aa5c816edcf4f4c03948dc856c99c4f208690705ee1%26redirect_uri%3Dhttps%253A%252F%252Fgravatar.com%252Fconnect%252F%253Faction%253Drequest_access_token%26from-calypso%3D1">
            Change profile photo
            <svg class="w-7 stroke-white ml-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7274 20.4471C19.2716 19.1713 18.2672 18.0439 16.8701 17.2399C15.4729 16.4358 13.7611 16 12 16C10.2389 16 8.52706 16.4358 7.12991 17.2399C5.73276 18.0439 4.72839 19.1713 4.27259 20.4471" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="8" r="4" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>

        
    </template>
    
    <template #actions>
        <ActionMessage :on="form.recentlySuccessful" class="mr-3">
            Saved
        </ActionMessage>
        
        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
            Save
        </PrimaryButton>
    </template>
</FormSection>
</div>
</template>
