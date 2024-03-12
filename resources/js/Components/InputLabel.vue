<script setup>
defineProps({
    value: {
        type: String,
    },
    name:{
        type: String,
        default: '',
    },
});
</script>

<template>
    <label class="block font-medium text-sm text-gray-700">
        <span v-if="value">{{ name }}</span>
        <span v-else><slot /></span>
    </label>
</template>
