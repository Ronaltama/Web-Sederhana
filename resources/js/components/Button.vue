<template>
    <button
        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
        @click="$emit('click')"
    >
        <slot>Button</slot>
    </button>
</template>

<script>
export default {
    name: "Button",
};
</script>

<style scoped>
/* no extra styles; use Tailwind utilities */
</style>
