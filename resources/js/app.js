import './bootstrap';
import '../css/app.css';
import "../../node_modules/v-dropdown-menu/dist/vue3/v-dropdown-menu.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import VueNumerals from "vue-numerals";
import VueApexCharts from "vue3-apexcharts";
import DropdownMenu from "v-dropdown-menu";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(VueNumerals)
            .use(VueApexCharts)
            .use(DropdownMenu)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
