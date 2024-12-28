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
                <li v-for="project in projects.data" :key="project.id">
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
        <div v-if="projects.links" class="pagination">
            <Link
                v-for="(link, index) in projects.links"
                :key="index"
                :href="link.url || '#'"
                v-html="link.label"
                :class="{ 'pagination-link': true, 'active': link.active }"
                :aria-disabled="!link.url"
            ></Link>
        </div>
    </AppLayout>
</template>
