<template>
    <div>
        <Navbar />
        <main class="container mx-auto p-6">
            <slot />
        </main>
        <footer class="text-center py-6 text-sm text-gray-500">
            © Madani Motor
        </footer>
    </div>
</template>

<script>
import Navbar from "../Components/Navbar.vue";

export default {
    name: "AppLayout",
    components: { Navbar },
};
</script>

<style scoped>
/* optional layout styles */
</style>
