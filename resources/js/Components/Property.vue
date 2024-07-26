<template>
    <Link :href="route('properties.show', item.id)"
        class="relative shadow rounded hover:scale-90 transition">
        <div class="bg-secondary shadow rounded text-white">
            <img :src="item.images[0].image" alt="">
            <div class="p-4 border-b border-secondary-300">
                <h3 class="text-2xl uppercase">{{ item.title }}</h3>
                <p class="text-sm mb-3">{{ item.address }}, {{ item.city }}, {{ item.country }}</p>
                <p class="text-4xl text-teal-500">{{ numeralFormat(item.price, "0,0[.]00 ZMW") }} ZMW</p>
            </div>
            <div class="flex justify-between px-4 py-2 text-center">
                <div>
                    <p class="font-bold">Beds</p>
                    <p>{{ item.bedrooms }}</p>
                </div>
                <div>
                    <p class="font-bold">Baths</p>
                    <p>{{ item.bathrooms }}</p>
                </div>
                <div>
                    <p class="font-bold">Area</p>
                    <p>{{ item.lot_size }} <sup>m2</sup></p>
                </div>
            </div>
        </div>
    </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
    props: {
        item: Object,
    }
}
</script>