<template>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">Home</h1>
        <p class="mb-4">
            Welcome to Madani Motor — this is the Inertia + Vue home page.
        </p>
        <Button @click="onClick">Test Tailwind Button</Button>
    </div>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";
import Button from "../Components/Button.vue";

export default {
    name: "Home",
    layout: AppLayout,
    components: {
        Button,
    },
    methods: {
        onClick() {
            alert("Button clicked — Tailwind classes applied");
        },
    },
};
</script>

<style scoped>
/* optional */
</style>
