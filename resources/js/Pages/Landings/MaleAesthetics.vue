<script setup>
import { ref } from 'vue';

import BannerTop from '@/Components/Landings/MaleAesthetic/BannerTop.vue';
import Modal from '@/Components/Modal.vue';
import MainLayout from '@/Layouts/MainLayout.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

</script>
<template>
    <MainLayout>

        <BannerTop></BannerTop>

        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>
