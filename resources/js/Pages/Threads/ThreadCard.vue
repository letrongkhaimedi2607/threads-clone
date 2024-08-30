<script setup lang="ts">
import { transformDateString } from "@/Utils/common";
import { IThread } from "@/types/thread";

interface IThreadCardProps {
    thread: IThread;
}
const { thread } = defineProps<IThreadCardProps>();
</script>
<template>
    <a :href="`/threads/${thread.id}`">
        <div class="flex flex-row justify-between items-end">
            <p class="text-md font-bold">{{ thread.content }}</p>
            <p class="min-w-[20%] text-sm text-end">4 mins</p>
        </div>
        <p class="text-sm text-stale-700 italic">
            {{ transformDateString(thread.created_at) }}
        </p>
    </a>
</template>
