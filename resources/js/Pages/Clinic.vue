<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import Modal from '@/Components/Modal.vue';
import ClinicMansory from '@/Components/ClinicMansory.vue';

const selectedDeal = 'Conheça a Clinica';

</script>
<template>
    <MainLayout>
        <div class="mt-20">
            <h1 class="text-3xl lg:text-4xl text-center py-6 title-section">
                Nosso Espaço
            </h1>
        </div>

        <ClinicMansory></ClinicMansory>
        <Modal :selectedDeal="selectedDeal"></Modal>

    </MainLayout>
</template>
