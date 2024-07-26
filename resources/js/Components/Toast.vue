<template>
    <div class="relative">
        <div
            v-if="sessionMessage"
            id="toast"
            class="bsolute p-4 max-w-md text-white transition-all"
            :class="{
                'bg-teal-500': sessionMessage.title == 'success',
                'bg-red-500': sessionMessage.title == 'error',
                'bg-orange-500': sessionMessage.title == 'warning',
            }"
        >
            <div class="text-2xl">{{ sessionMessage.title }}</div>
            <p>{{ sessionMessage.message }}</p>
        </div>
    </div>
</template>

<script>
export default {
    props:{
        sessionMessage: Object,
    },
    setup() {
        const toast = document.querySelector("#toast");
        return {
            toast,
        }
    },
    mounted() {
        setTimeout(() => toast.classList.add("-translate-y-full"), 2000);
    }
}

</script>
