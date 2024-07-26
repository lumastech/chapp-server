<template>
    <div>
        <p class="text-green-500 text-xs" v-if="current > last" >
            <i class="fas fa-arrow-up"></i> {{ current }} this Month
        </p>
        <p class="text-green-500 text-xs" v-else-if="current == last" >
            <i class="fas fa-arrow-right"></i> {{ current }} this Month
        </p>
        <p v-else class="text-red-500 text-xs">
            <i class="fas fa-arrow-down"></i> {{ current }} this Month
        </p>
    </div>
</template>

<script setup lang="ts">
defineProps<{
    last: any;
    current: any;
}>();
</script>
