<template>
    <div class="project">
        <h2 class="text-xl font-bold">{{ name }}</h2>
        <p class="text-gray-600">{{ slug }}</p>
        <p v-if="description" class="text-gray-800">{{ description }}</p>
        <a v-if="url" :href="url" target="_blank" class="text-blue-500 underline">
            {{ url }}
        </a>
    </div>
</template>

<script>
export default {
    name: 'Project',
    props: {
        name: {
            type: String,
            required: true,
            max: 255,
        },
        slug: {
            type: String,
            required: true,
        },
        description: {
            type: String,
            required: false,
        },
        url: {
            type: String,
            required: false,
        },
    },
};
</script>
