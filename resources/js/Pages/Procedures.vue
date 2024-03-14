<script setup>
import { ref } from 'vue';

import CtaSchedule from '@/Components/CtaSchedule.vue';
import Modal from '@/Components/Modal.vue';
import MainLayout from '@/Layouts/MainLayout.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

</script>
<template>
    <MainLayout>
        <div class="mt-20">
            <h1 class="text-3xl lg:text-4xl text-center py-6 title-section">
                Titulo do procedimento
            </h1>
        </div>

        <CtaSchedule :selectedDeal="selectedDeal" @setDeal="setDeal"></CtaSchedule>

        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>
