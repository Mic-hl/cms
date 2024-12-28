<template>
    <div class="project">
        <h2>{{ name }}</h2>
        <p>{{ slug }}</p>
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
