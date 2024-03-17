<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import Modal from '@/Components/Modal.vue';
import ClinicMansory from '@/Components/ClinicMansory.vue';
import CtaSchedule from '@/Components/CtaSchedule.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

</script>
<template>

    <Head :title="$page.props.title" />

    <MainLayout>
        <div class="mt-20">
            <h1 class="text-3xl lg:text-4xl text-center py-6 title-section">
                Nosso Espaço
            </h1>
        </div>

        <ClinicMansory></ClinicMansory>

        <CtaSchedule :selectedDeal="selectedDeal" @setDeal="setDeal"></CtaSchedule>

        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>
