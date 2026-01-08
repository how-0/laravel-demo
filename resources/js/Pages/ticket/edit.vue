<script setup>
import { Head,useForm,usePage } from '@inertiajs/vue3'
import Layout from '@/Components/layout.vue'
const props = defineProps(["ticket"]);

const form = useForm({
    name: props.ticket.name,
    gender: props.ticket.gender,
    inquiry: props.ticket.inquiry,
    status: props.ticket.status,
})
console.log(props);
</script>

<template>
    <layout>   
        <Head title="Edit Ticket" />
        <h1 class="flex text-center mx-auto max-w-sm text-white mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">Edit Ticket</h1><br>
      <form @submit.prevent="form.put(`/ticket/edit/${ticket.id}`)" class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
            <input v-model="form.name" type="text" id="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="John Doe" required disabled />
        </div>
        <fieldset>
            <label><legend class="block mb-2.5 text-sm font-medium text-heading ">Gender</legend></label>
            <div class="flex items-center mb-4">
                <input disabled v-model="form.gender" type="radio" value="Male" class="w-4 h-4 rounded-full border border-default-medium bg-neutral-secondary-medium checked:bg-brand checked:border-brand" id = "gender-male">

                <label for="gender-option-1" class="select-none ms-2 text-sm font-medium text-heading">
                Male
                </label>
            </div>

            <div class="flex items-center mb-4">
                <input disabled v-model="form.gender" id="gender-female" type="radio" name="countries" value="Female" class="w-4 h-4 rounded-full border border-default-medium bg-neutral-secondary-medium checked:bg-brand checked:border-brand">

                <label for="gender-option-2" class="select-none ms-2 text-sm font-medium text-heading">
                Female
                </label>
            </div>
            </fieldset>
      
        <label for="message" class="block mb-2.5 text-sm font-medium text-heading">Your message</label>
        <textarea disabled v-model="form.inquiry" id="message" rows="4" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Write your inquiry here..."></textarea>
        <br>    
        <label for="countries" class="block mb-2.5 text-sm font-medium text-heading">Select an option</label>
        <select v-model="form.status" id="countries" class="block w-full px-3 py-2.5 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body">
            <option selected>Choose a status</option>
            <option value="New">New</option>
            <option value="Processing">Processing</option>
            <option value="Cancel">Cancel</option>
            <option value="Completed">Completed</option>
        </select><br>
        <button type="submit" class="flex mx-auto max-w-sm text-white bg-custom-blue box-border border border-transparent hover:bg-blue focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>

      </form>   
 </layout>

</template>