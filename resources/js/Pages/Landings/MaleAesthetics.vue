<script setup>
import { ref } from 'vue';

import BannerTop from '@/Components/Landings/MaleAesthetic/BannerTop.vue';
import Modal from '@/Components/Landings/MaleAesthetic/Modal.vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import FirstSection from '@/Components/Landings/MaleAesthetic/FirstSection.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

</script>
<template>
    <MainLayout>

        <BannerTop :selectedDeal="selectedDeal" @setDeal="setDeal"></BannerTop>

        <FirstSection :selectedDeal="selectedDeal" @setDeal="setDeal"></FirstSection>

        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>

<style>
::selection {
    background-color: #690000;
    color: var(--color-white);
}

::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-track {
    background-color: #ebebeb;
}

::-webkit-scrollbar-thumb {
    background-color: #690000;
    opacity: 0;
    transition: opacity 0.3s;
}

::-webkit-scrollbar-thumb:hover {
    opacity: 1;
}
</style>
