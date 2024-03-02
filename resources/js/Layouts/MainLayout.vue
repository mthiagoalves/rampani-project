<script setup>
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
import BtnWhatsapp from '@/Components/BtnWhatsapp.vue';

</script>
<template>
    <NavBar>

    </NavBar>
    <slot />
    <BtnWhatsapp></BtnWhatsapp>
    <Footer>

    </Footer>
</template>
