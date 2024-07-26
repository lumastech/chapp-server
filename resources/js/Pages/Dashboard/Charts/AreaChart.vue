<template>
    <apexchart
        width="100%"
        height="auto"
        type="area"
        :options="chartOptions"
        :series="series"
        class="md:col-span-2"
    ></apexchart>
</template>

<script setup>
import { ref } from "vue";
const getPreviousMonths = () => {
    const months = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const currentDate = new Date();
    const currentMonthIndex = currentDate.getMonth();
    const previousMonths = [];

    for (let i = 0; i <= 7; i++) {
        const previousMonthIndex = (currentMonthIndex - i + 12) % 12;
        previousMonths.push(months[previousMonthIndex]);
    }
    previousMonths.reverse();
    return previousMonths;
};
const chartOptions = ref({
    chart: {
        animations: {
            enabled: true,
            easing: 'easeinout',
            speed: 800,
            animateGradually: {
                enabled: true,
                delay: 150
            },
            dynamicAnimation: {
                enabled: true,
                speed: 350
            }
        }
    },
    xaxis: {
        categories: getPreviousMonths(),
    },

    stroke: {
        curve: "smooth",
    },
    colors: ["#EB840F"],
    dataLabels: {
        enabled: false,
    },
});
const series = ref([
    {
        name: "series-1",
        data: [0, 0, 0, 0, 0, 0, 0, 0],
    },
]);
</script>
