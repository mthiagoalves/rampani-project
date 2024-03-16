<script setup>
import { computed } from 'vue';

const isLandingMaleAesthetic = computed(() => route().current('male-aesthetic'));
</script>

<template>
    <div :class="{ 'btn-whatsapp': !isLandingMaleAesthetic, 'btn-whatsapp-red': isLandingMaleAesthetic }">
        <li>
            <a href="https://web.whatsapp.com/send?phone=5511941624610&text=Ol%C3%A1,%20estou%20no%20site%20e%20gostaria%20de%20conhecer%20mais%20sobre%20os%20servi%C3%A7os."
                class="icons-socials-footer mb-4" target="_blank"><img src="/imgs/icons/whatsapp-white.png">
                <span class="hidden sm:block">Como podemos te ajudar?</span></a>
        </li>
    </div>
</template>
<style scoped>
.btn-whatsapp,
.btn-whatsapp-red {
    position: fixed;
    bottom: 3%;
    right: -200px;
    width: 240px;
    z-index: 99999;
    transition: all 1s;
}

.btn-whatsapp:hover,
.btn-whatsapp-red:hover {
    right: 1%;
}

.btn-whatsapp li,
.btn-whatsapp-red li {
    list-style: none;
}

.btn-whatsapp li a {
    padding: 15px;
    border-radius: 25px;
    background-color: var(--color-standard);
}

.btn-whatsapp-red li a {
    padding: 15px;
    border-radius: 25px;
    background-color: #690000;
}
.btn-whatsapp-red li a span {
    color: #ffffff;
}

@media(max-width: 756px) {
    .btn-whatsapp, .btn-whatsapp-red{
        bottom: 5%;
        right: 3%;
        width: auto;
    }

    .btn-whatsapp li a {
        padding: 15px;
        border-radius: 25px;
        background-color: var(--color-standard);
    }
    .btn-whatsapp-red li a {
        padding: 15px;
        border-radius: 25px;
        background-color: #690000;
    }

    .btn-whatsapp li a img, .btn-whatsapp-red li a img {
        margin: 0;
        max-width: 25px;
    }
}
</style>
