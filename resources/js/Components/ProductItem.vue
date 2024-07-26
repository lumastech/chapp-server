<template>
    <Link  :href="route('plan.show', plan.id)" class="relative aspect-video shadow rounded hover:scale-105 transition overflow-hidden">
        <img v-if="plan.images.length" :src="plan.images[0].image" alt="3 bed rooms" class="w-full aspect-video">
        <div class="absolute top-0 w-full h-full hover:bg-primary-900/50 transition">

            <h5 class="bg-secondary-900/50 absolute w-full px-2 top-0">{{plan.name}}</h5>

            <div class="absolute bottom-0 bg-secondary-900/50 w-full text-xs text-center">
                <div class="grid grid-cols-3 border-b">
                    <div class="overflow-hidden">
                        <span class="line-clamp-1">{{ plan.levels }} store</span>
                    </div>
                    <div class="overflow-hidden border-x text-center">
                        <span class="line-clamp-1">{{ plan.bedrooms }}</span>
                    </div>
                    <div class="overflow-hidden">
                        <span class="line-clamp-1">{{ plan.bathrooms }} Bathrooms</span>
                    </div>
                </div>
                <div class="grid grid-cols-3">
                    <div class="overflow-hidden">
                        <span class="line-clamp-1">{{ plan.style }}</span>
                    </div>
                    <div class="overflow-hidden border-x text-center">
                        <span class="line-clamp-1">{{ plan.roof_finish }}</span>
                    </div>
                    <div class="overflow-hidden">
                        <span class="line-clamp-1">{{ plan.area }}<sup>2m</sup></span>
                    </div>
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
        plan: Object,
    }
}
</script>