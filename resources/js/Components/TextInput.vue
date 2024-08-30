<script setup lang="ts">
import { onMounted, ref } from "vue";
const { placeholder } = defineProps<{
    placeholder?: string;
}>();
const model = defineModel<string>({ required: true });

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
    if (input.value?.hasAttribute("autofocus")) {
        input.value?.focus();
    }
});

defineExpose({ focus: () => input.value?.focus() });
</script>

<template>
    <input
        class="rounded-sm max-h-[40px] w-full"
        v-model="model"
        ref="input"
        :placeholder="placeholder"
    />
</template>
