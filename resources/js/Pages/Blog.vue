<script setup>
import { ref } from 'vue';

import MainLayout from '@/Layouts/MainLayout.vue';
import BannerDeals from '@/Components/BannerDeals.vue';
import Modal from '@/Components/Modal.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};
</script>
<template>
    <MainLayout>

        <BannerDeals :selectedDeal="selectedDeal" @setDeal="setDeal"></BannerDeals>

        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>
