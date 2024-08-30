<script setup lang="ts">
import { transformDateString } from "@/Utils/common";
import { IComment } from "@/types/comment";
import TheadActions from "./TheadActions.vue";
import Avatar from "./Avatar.vue";

defineProps<{
    isShowComments: boolean;

    comments: IComment[] | undefined;
}>();
</script>

<template>
    <div class="" v-if="true">
        <div
            class="my-3"
            v-for="(comment, index) in comments"
            :key="comment.id"
        >
            <div class="flex flex-row gap-2">
                <Avatar />
                <div>
                    <p class="text-sm mb-1">
                        {{ comment.content }}
                    </p>
                    <div class="flex flex-row justify-between">
                        <p class="text-[0.725rem] text-slate-300 italic">
                            {{ transformDateString(comment.created_at) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
