<template>
    <Head title="Users" />
<div class="max-w-7xl mx-auto px-2">
    <div class="flex">
        <i class="fas fa-user"></i>
        <span>Lumas Mulo</span>
        <span>lumastech@gmail.com</span>
    </div>
</div>
</template>
<script>
import DashboardLayout from '../../Layouts/DashboardLaout.vue';
import { Link, Head } from '@inertiajs/vue3';
    export default {
        components:{DashboardLayout, Link, Head},
    layout: DashboardLayout,
    props: {
        tickets: Object,
        sum_price: Number,
        sum_insurance: Number,
        count_tickets: Number,
        count_insurance: Number,
    },
    setup() {
        return {
            sideToggle() {
                document.getElementById('side').classList.toggle('hidden');
            }
        }
    }
    }
</script>
