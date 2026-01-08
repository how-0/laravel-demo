<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header>
            <nav>
            <div>
            <ul>
            <li><Link href="/">Home</Link></li>
            <li><Link href="/ticket">View all tickets</Link></li>
            <li><Link href="/ticket/create">Create tickets</Link></li>
            <li><Link href="/login">Log IN</Link></li>
            <li><Link href="/logout">Log OUT</Link></li>
            </ul>
            </div>
            </nav>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>