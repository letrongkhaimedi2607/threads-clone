<script setup lang="ts">
import GuestLayout from "@/Layouts/GuestLayout.vue";
import ThreadAction from "@/Components/TheadActions.vue";
import { Head } from "@inertiajs/vue3";
import { IThread } from "@/types/thread";
import ThreadCard from "./ThreadCard.vue";

import Avatar from "@/Components/Avatar.vue";
import StartThread from "./StartThread.vue";

defineProps<{
    threads: IThread[];
}>();
</script>

<template>
    <Head title="Threads" />

    <GuestLayout>
        <StartThread />
        <div
            class="py-6 border-b-2"
            v-for="(thread, index) in threads"
            :key="`${thread.id}`"
        >
            <ThreadCard :thread="thread" />
        </div>
    </GuestLayout>
</template>
