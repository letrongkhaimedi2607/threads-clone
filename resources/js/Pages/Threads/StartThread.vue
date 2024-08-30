<script setup lang="ts">
import Avatar from "@/Components/Avatar.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const titleInput = ref<HTMLInputElement | null>(null);

const form = useForm({
    title: "",
    content: "",
});
const formCallback = {
    preserveScroll: true,
    onSuccess: () => {
        form.reset();
    },
    onError: () => {
        if (form.errors.title) {
            form.reset("title");
            titleInput.value?.focus();
        }
    },
};
</script>

<template>
    <form @submit.prevent="form.post(route('threads.store'), formCallback)">
        <div>
            <div class="flex flex-row gap-2 items-center">
                <Avatar />
                <!-- <input
                placeholder="Start a thread..."
                class="rounded-sm max-h-[40px] w-full border-none"
            /> -->
                <TextInput
                    id="content"
                    type="text"
                    ref="titleInput"
                    placeholder="Start a thread..."
                    class="block w-full border-none"
                    v-model="form.content"
                    required
                    autofocus
                    autocomplete="content"
                />
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>
