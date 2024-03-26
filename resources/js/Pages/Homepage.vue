<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import BannerTop from '@/Components/BannerTop.vue';
import FirstSection from '@/Components/FirstSection.vue';
import BannerDeals from '@/Components/BannerDeals.vue';
import InspirationalPhrase from '@/Components/InspirationalPhrase.vue';
import CommentsGoogle from '@/Components/CommentsGoogle.vue';
import FormContact from '@/Components/FormContact.vue';
import MainLayout from '@/Layouts/MainLayout.vue';
import Modal from '@/Components/Modal.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};
</script>

<template>

    <Head>
        <title>{{ $page.props.title }}</title>
        <meta head-key="description" name="description" content="This is a page specific description" />
    </Head>

    <MainLayout>
         <template #main>
             <BannerTop :selectedDeal="selectedDeal" @setDeal="setDeal">

             </BannerTop>

             <FirstSection></FirstSection>

             <BannerDeals :selectedDeal="selectedDeal" @setDeal="setDeal"></BannerDeals>

             <InspirationalPhrase>

             </InspirationalPhrase>


             <CommentsGoogle>

             </CommentsGoogle>

             <FormContact></FormContact>

             <Modal :selectedDeal="selectedDeal"></Modal>
         </template>
    </MainLayout>
</template>
