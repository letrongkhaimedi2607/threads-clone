<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { IFavorite } from '@/types/favorite';
import { transformDateString } from '@/Utils/common';

defineProps<{
    favorites: any[]
}>()

</script>

<template>
    <GuestLayout>
        <p class="text-3xl text-green-400 font-bold">FAVORITES</p>
        <div
            class="py-6 [&:not(:last-child)]:border-b-2"
            v-for="(thread, index) in favorites"
            :key="`${thread.id}`"
        >
        <a :href="`/threads/${thread.id}`">
        <div class="flex flex-row justify-between items-end">
            <p class="text-md font-bold">{{ thread.content }}</p>
            <p class="min-w-[20%] text-sm text-end">4 mins</p>
        </div>
        <p class="text-sm text-stale-700 italic">
            {{ transformDateString(thread.created_at) }}
        </p>
    </a>
        </div>
    </GuestLayout>
</template>