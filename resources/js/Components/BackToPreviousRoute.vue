<script setup lang="ts">
function handleBackToPreviosRoute() {
    window.history.back();
}
</script>
<template lang="">
    <div @click="handleBackToPreviosRoute" class="cursor-pointer">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-4"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"
            />
        </svg>
    </div>
</template>

<style lang=""></style>
