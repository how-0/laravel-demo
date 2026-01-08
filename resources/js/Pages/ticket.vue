<script setup>
import Layout from '@/Components/layout.vue'
import { Head,usePage,useForm,router } from '@inertiajs/vue3'
import { ref } from 'vue'


const page = usePage()
const tickets = ref(page.props.tickets)
const form = useForm({});

const deleteItem = (id) => {
    form.delete(`/ticket/${id}`, {
        onSuccess: () => {
            tickets.value = tickets.value.filter(t => t.id !== id)
        }
    });
};

const showEdit = (id) => {
    router.visit(`/ticket/edit/${id}`);
};


</script>


<template>
    <Layout>
        <Head title="Welcome" />
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default m-4">
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
                    <tr>
                        <th scope="col" class="text-white px-6 py-3 font-medium">
                            Name
                        </th>
                        <th scope="col" class="text-white px-6 py-3 font-medium">
                            Gender
                        </th>
                        <th scope="col" class="text-white px-6 py-3 font-medium">
                            Inquiry
                        </th>
                        <th scope="col" class="text-white px-6 py-3 font-medium">
                            Status
                        </th>
                        <th scope="col" class="text-white px-6 py-3 font-medium">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="ticket in tickets" :key="ticket.id" class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                        <td class="hidden px-6 py-4">
                            {{ ticket.id }}
                        </td>
                        <td class="text-white px-6 py-4">
                            {{ ticket.name }}
                        </td>
                        <td class="text-white px-6 py-4">
                            {{ ticket.gender }}
                        </td>
                        <td class="text-white px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ ticket.inquiry }}
                        </td>
                        <td class="text-white px-6 py-4">
                            {{ ticket.status }}
                        </td>
                        <td class="text-white px-6 py-4">
                            <button type="submit" @click="deleteItem(ticket.id)" class="font-medium text-fg-brand hover:underline">{{ form.processing ? 'Deleting...' : 'Delete' }}</button>&nbsp;&nbsp;
                            <button type="submit" @click="showEdit(ticket.id)" class="font-medium text-fg-brand hover:underline">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>