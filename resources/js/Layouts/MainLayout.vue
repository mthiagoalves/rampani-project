<script setup>
import NavBar from '@/Components/NavBar.vue';
import Footer from '@/Components/Footer.vue';
import BtnWhatsapp from '@/Components/BtnWhatsapp.vue';
import { ref, computed, onMounted } from 'vue';
import { initFlowbite } from 'flowbite';

const receivedHeight = ref(0);
const isHomePage = computed(() => route().current('homepage'));

const receiveNavbarHeight = (height) => {
    receivedHeight.value = height;
};

onMounted(() => {
    initFlowbite();
});

</script>

<template>
    <div>
        <NavBar @navbarHeight="receiveNavbarHeight">
        </NavBar>
        <div :style="{ marginTop: !isHomePage ? (receivedHeight - 1) + 'px' : '0' }">
            <slot name="main" />
        </div>
        <BtnWhatsapp></BtnWhatsapp>
        <Footer></Footer>
    </div>
</template>

<style scoped>
/* Estilo para aplicar a margem superior */
.mt-navbar-height {
    margin-top: receivedHeight - 1 + 'px';
}
</style>
