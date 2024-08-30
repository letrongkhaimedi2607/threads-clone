<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ThreadAction from "@/Components/TheadActions.vue";
import { Head, router } from "@inertiajs/vue3";
import { IThread } from "@/types/thread";
import ThreadCard from "./ThreadCard.vue";
import BackToPreviousRoute from "@/Components/BackToPreviousRoute.vue";
import { IComment } from "@/types/comment";
import AddComment from "@/Components/AddComment.vue";

defineProps<{
    thread: IThread;
    comments: IComment[];
}>();
</script>

<template>
    <Head title="Thread" />

    <GuestLayout>
        <BackToPreviousRoute />
        <div class="py-6">
            <ThreadCard :thread="thread" />

            <ThreadAction :comments="comments" />
            <AddComment />
        </div>
    </GuestLayout>
</template>
