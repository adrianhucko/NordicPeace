<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Logo from '@/Components/Logo.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <AuthenticationCard class="-mt-14">
        <div class="flex items-center justify-center mb-10">
            <Logo></Logo> 
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>

                <InputLabel for="email" value="Email" class="font-rem"/>
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" class="font-rem"/>
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="px-2 font-rem text-md rounded-full text-gray-600 hover:text-neutral-950 focus:outline-none transition duration-150 ease-in-out">Remember me</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-center mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            
                <Link v-if="canResetPassword" :href="route('password.request')" class="mt-5 px-2 py-1 font-rem text-md rounded-full text-gray-600 hover:text-neutral-950 focus:outline-none transition duration-150 ease-in-out">
                    Forgot your password?
                </Link>

                <Link :href="route('register')" class="mt-2 px-6 py-1 font-rem text-md rounded-full text-gray-600 hover:text-neutral-950 focus:outline-none transition duration-150 ease-in-out">
                    Create account here
                </Link>
            </div>

        </form>
    </AuthenticationCard>
</template>
