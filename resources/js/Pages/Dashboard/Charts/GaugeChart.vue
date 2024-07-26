<template>
    <div class="text-right">
        <dropdown-menu :overlay="false" direction="right">
            <template #trigger>
                <button
                    class="rounded px-2 pyy-1 bg-indigo-500 hover:bg-indigo-600 transition text-white"
                >
                    {{ getPreviousMonths()[0] }}
                    <i class="fas fa-angle-down"></i>
                </button>
            </template>

            <!-- <template #header> Dropdown Header </template> -->

            <template #body class="rounded overflow-hidden">
                <ul class="shadow rounded text-left">
                    <li
                        v-for="month in getPreviousMonths()"
                        :key="month"
                        class="p-2 border-b border-gray-100 hover:bg-gray-100 transition cursor-pointer"
                    >
                        {{ month }}
                    </li>
                </ul>
            </template>

            <!-- <template #footer> Dropdown Footer </template> -->
        </dropdown-menu>
    </div>
    <apexchart
        width="100%"
        height="auto"
        type="radialBar"
        :options="plotOptions"
        :series="series"
        class="w-full md:col-span-2"
    />

    <div>
        <p class="text-center mb-2"> {{ numeralFormat(growthPer(last_month, this_month), "0,0[.]00") }}% Company Growth</p>
        <div class="flex justify-evenly">
            <div class="flex">
                <i
                    class="self-center p-3 rounded bg-green-100 mr-1 text-green-500 fas fa-dollar"
                ></i>
                <div class="text-sm self-center">
                    <p>{{ getPreviousMonths()[1] }}</p>
                    <p>{{ last_month }}</p>
                </div>
            </div>

            <div class="flex">
                <i
                    class="self-center p-3 rounded bg-sky-100 mr-1 text-sky-500 fas fa-dollar"
                ></i>
                <div class="text-sm self-center">
                    <p>{{ getPreviousMonths()[0] }}</p>
                    <p>{{ this_month }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { ref } from "vue";

export default {
    props: {
        last_month: Number,
        this_month: Number,
    },
    setup() {
        const series = ref([0]);
        const plotOptions = ref({
            chart: {
                height: 280,
                type: "radialBar",
            },
            series: [67],
            colors: ["#20E647"],
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    track: {
                        background: "#333",
                        startAngle: -135,
                        endAngle: 135,
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
                    shade: "dark",
                    type: "horizontal",
                    gradientToColors: ["#87D4F9"],
                    stops: [0, 100],
                },
            },
            stroke: {
                lineCap: "butt",
            },
            labels: ["Progress"],
        });

        // previous months
        const getPreviousMonths = () => {
            const months = [
                "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December",
            ];
            const currentDate = new Date();
            const currentMonthIndex = currentDate.getMonth();
            const previousMonths = [];

            for (let i = 0; i <= 4; i++) {
                const previousMonthIndex = (currentMonthIndex - i + 12) % 12;
                previousMonths.push(months[previousMonthIndex]);
            }
            return previousMonths;
        };

        const growthPer = (last, current) => {
            let growth = ((current == 0 ? 1 : current) / (last == 0 ? 1 : last)) * 100;
            return growth;
        }
        return {
            series,
            plotOptions,
            getPreviousMonths,
            growthPer,
        };
    },
};
</script>
