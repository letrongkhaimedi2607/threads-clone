<script setup lang="ts">
import Avatar from "@/Components/Avatar.vue";
import TextInput from "@/Components/TextInput.vue";
import { parsePageId } from "@/Utils/common";

import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const contentInput = ref<HTMLInputElement | null>(null);

const form = useForm({
    content: "",
    thread_id: parsePageId(window.location.pathname),
});
const formCallback = {
    preserveScroll: true,
    onSuccess: () => {
        form.reset();
    },
    onError: () => {
        if (form.errors.content) {
            form.reset("content");
            contentInput.value?.focus();
        }
    },
};
</script>

<template>
    <form @submit.prevent="form.post(route('comments.store'), formCallback)">
        <div>
            <div class="flex flex-row gap-2 items-center my-3">
                <TextInput
                    id="content"
                    type="text"
                    ref="contentInput"
                    placeholder="Add a new comment..."
                    class="block w-full border-none"
                    v-model="form.content"
                    required
                    autofocus
                    autocomplete="content"
                />
            </div>
        </div>
    </form>
</template>
