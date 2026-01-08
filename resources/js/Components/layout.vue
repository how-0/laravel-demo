<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header>
            <nav class="relative bg-gray-800/50 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <ul class="flex space-x-4">
            <li class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white"><Link href="/">Home</Link></li>
            <li class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white"><Link href="/ticket">View all tickets</Link></li>
            <li class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white"><Link href="/ticket/create">Create tickets</Link></li>
            <li class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white"><Link href="/logout">Log OUT</Link></li>
            </ul>
            </div>
            </nav>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>