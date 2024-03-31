<script setup>
import { defineEmits, defineProps } from 'vue';

const { dealNew, campaigns } = defineProps(['selectedDeal', 'campaigns']);
const emit = defineEmits();

const setDeal = (deal) => {
    emit('setDeal', deal);
};

</script>

<template>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-120 overflow-hidden md:h-120">
            <div v-for="campaign in campaigns.campaigns" :key="campaign.id" class="hidden duration-700 ease-in-out" data-carousel-item>
                <a type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    @click="setDeal(campaign.name)" class="cursor-pointer">
                    <img :src="`/imgs/campaigns/${campaign.slug}.jpg`"
                        class="absolute w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 hidden sm:block"
                        :alt="campaign.name">
                    <img :src="`/imgs/campaigns/${campaign.slug}-m.jpg`"
                        class="absolute w-1200 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 block sm:hidden"
                        :alt="campaign.name">
                </a>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-clean-rose dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-clean-rose dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</template>
