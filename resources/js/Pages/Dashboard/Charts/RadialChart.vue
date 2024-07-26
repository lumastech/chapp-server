<template>
    <apexchart
        width="100%"
        height="auto"
        type="radialBar"
        :options="plotOptions"
        :series="series"
    />
</template>

<script>
import { ref } from "vue";

export default {
    setup() {
        const series = ref([33]);
        const plotOptions = ref({
            chart: {
                height: 'auto',
                type: "radialBar",
            },
            series: [0],
            colors: ["#20E647"],
            plotOptions: {
                radialBar: {
                    // startAngle: -135,
                    // endAngle: 135,
                    track: {
                        background: "#333",
                        // startAngle: -135,
                        // endAngle: 135,
                    },
                    dataLabels: {
                        name: {
                        show: false,
                        },
                        value: {
                        fontSize: "16px",
                        show: true,
                        },
                    },
                },
            },
            fill: {
                type: "gradient",
                gradient: {
                shade: "light",
                type: "horizontal",
                gradientToColors: ["#87D4F9", "#06ECEC"],
                stops: [0, 100],
                },
            },
            stroke: {
                lineCap: "butt",
            },
            labels: ["Progress"],
            })

        return {
            series,
            plotOptions,
        };
    },
};
</script>
