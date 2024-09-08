<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ThreadAction from "@/Components/TheadActions.vue";
import { Head, router } from "@inertiajs/vue3";
import { IThread } from "@/types/thread";
import ThreadCard from "./ThreadCard.vue";
import BackToPreviousRoute from "@/Components/BackToPreviousRoute.vue";
import { IComment } from "@/types/comment";
import { ILike } from "@/types/like";
import AddComment from "@/Components/AddComment.vue";

defineProps<{
    thread: IThread;
    comments: IComment[];
    likes: ILike[];
}>();
function handleLike() {
    console.log("Hello");
}
</script>

<template>
    <Head title="Thread" />

    <GuestLayout>
        <BackToPreviousRoute />
        <div class="py-6">
            <ThreadCard :thread="thread" />
            <p
                @click="handleLike"
                class="text-sm text-stale-700 my-2 flex gap-1 items-center italic"
            >
                {{ likes.length }}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="red"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="red"
                    class="size-4"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"
                    />
                </svg>
            </p>

            <ThreadAction :comments="comments" />
            <AddComment />
        </div>
    </GuestLayout>
</template>
