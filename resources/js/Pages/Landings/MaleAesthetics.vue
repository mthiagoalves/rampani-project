<script setup>
import { ref } from 'vue';

import BannerTop from '@/Components/Landings/MaleAesthetic/BannerTop.vue';
import Modal from '@/Components/Landings/MaleAesthetic/Modal.vue';
import ModalInfo from '@/Components/Landings/MaleAesthetic/ModalInfo.vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import FirstSection from '@/Components/Landings/MaleAesthetic/FirstSection.vue';
import SecondSection from '@/Components/Landings/MaleAesthetic/SecondSection.vue';
import ThirdSection from '@/Components/Landings/MaleAesthetic/ThirdSection.vue';
import FourthSection from '@/Components/Landings/MaleAesthetic/FourthSection.vue';
import OurSpace from '@/Components/Landings/MaleAesthetic/OurSpace.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

</script>
<template>
    <MainLayout>

        <BannerTop :selectedDeal="selectedDeal" @setDeal="setDeal"></BannerTop>

        <FirstSection :selectedDeal="selectedDeal" @setDeal="setDeal"></FirstSection>

        <SecondSection :selectedDeal="selectedDeal" @setDeal="setDeal"></SecondSection>

        <OurSpace></OurSpace>

        <ThirdSection></ThirdSection>

        <FourthSection></FourthSection>

        <ModalInfo :selectedDeal="selectedDeal" @setDeal="setDeal"></ModalInfo>

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
</style>import SecondSectionVue from '@/Components/Landings/MaleAesthetic/SecondSection.vue';

