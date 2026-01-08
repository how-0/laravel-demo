<script setup>
import { Head,useForm } from '@inertiajs/vue3'

const form = useForm({
    email: '',
    password: '',
})

</script>

<template>
        <Head title="Login" />
        <div class="min-h-screen flex items-center justify-center">
        <form @submit.prevent="form.post('/login')" class="max-w-sm mx-auto" >
        <div class="mb-5">
            <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
            <input v-model="form.email" type="email" id="email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Your password</label>
            <input v-model="form.password" type="password" id="password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="••••••••" required />
        </div>
        <button type="submit" class="flex mx-auto max-w-sm text-white bg-custom-blue box-border border border-transparent hover:bg-blue focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
        <div>
            <p class="mt-4 text-sm text-center text-heading text-white">Don't have an account yet? <a href="/register" class="text-fg-brand hover:underline text-white">Sign up</a></p>
        </div>
        </form>
        </div>

</template>