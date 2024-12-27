<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Project from '@/Components/Project.vue';

defineProps(['projects']);
</script>

<template>
    <AppLayout title="Projects">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Projects
            </h2>
        </template>

        <div class="content-wrapper">
            <ul class="projects-list">
                <li v-for="project in projects" :key="project.id">
                    <Project
                        :name="project.name"
                        :slug="project.slug"
                        :description="project.description"
                        :url="project.url"
                    />
                </li>
            </ul>
        </div>
    </AppLayout>
</template>