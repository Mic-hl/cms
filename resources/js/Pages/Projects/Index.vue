<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Project from '@/Components/Project.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps(['projects']);
</script>

<template>
    <Head title="Projects" />

    <AppLayout title="Projects">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Projects
            </h2>
        </template>

        <div class="content-wrapper">
            <ul class="projects-list">
                <li v-for="project in projects" :key="project.id">
                    <Link
                        :href="`projects/${project.id}`"
                        class="project-link"
                    >
                        <Project
                            :name="project.name"
                            :slug="project.slug"
                            :description="project.description"
                            :url="project.url"
                        />
                    </Link>
                </li>
            </ul>
        </div>
    </AppLayout>
</template>