<script setup>
import { Head } from '@inertiajs/vue3';

import MainLayout from '@/Layouts/MainLayout.vue';
import Procedures from '@/Components/Procedures/Procedures.vue';


</script>
<template>

    <Head :title="$page.props.title" />

    <MainLayout>
        <Procedures></Procedures>
    </MainLayout>
</template>
