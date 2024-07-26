<template>
    <apexchart
        width="100%"
        height="auto"
        type="donut"
        :options="chartOptions"
        :series="series"
        class="md:col-span-2"
    ></apexchart>
</template>

<script setup>
import { ref } from "vue";
const chartOptions = ref({
    series: [0, 0, 0, 0],
    legend: {
      show: false
    },
    labels: [44, 55, 13, 33],
     dataLabels: {
        name: {
        show: false,
        },
        value: {
        fontSize: "12px",
        show: false,
        },
    },
    pie: {
        donut: {
          size: '65%'
        },

      }
});
const series = ref([44, 55, 13, 33]);
</script>
