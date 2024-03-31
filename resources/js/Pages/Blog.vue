<script setup>
import { ref, defineProps } from 'vue';
import { Head } from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import BannerDeals from '@/Components/BannerDeals.vue';
import CardsBlog from '@/Components/Blog/CardsBlog.vue';
import Modal from '@/Components/Modal.vue';

const campaigns = defineProps(['campaigns']);

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};
</script>
<template>

    <Head :title="$page.props.title" />

    <MainLayout>

        <template #main>
            <BannerDeals :campaigns="campaigns" @setDeal="setDeal"></BannerDeals>

            <div class="w-full pl-5 lg:pl-2 my-6">
                <h1 class="text-3xl lg:text-4xl title-section text-center">
                    Os ultimos conteúdos sobre cuidados e estética !
                </h1>

            </div>

            <CardsBlog :posts="$page.props.posts"></CardsBlog>

            <Modal :selectedDeal="selectedDeal"></Modal>
        </template>


    </MainLayout>
</template>
