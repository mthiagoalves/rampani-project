<script setup>
import NavLink from '@/Components/NavLink.vue';
import { initFlowbite } from 'flowbite';
import { computed, defineEmits, onMounted, ref } from 'vue';

const navbarRef = ref(null); // Criando uma ref para o elemento da barra de navegação
const emit = defineEmits();

const isHomePage = computed(() => route().current('homepage'));

onMounted(() => {
    setTimeout(() => {
        const navbarHeight = document.querySelector('.give-mg').offsetHeight;
        emit('navbarHeight', navbarHeight);
    }, 200);

    initFlowbite();
});
</script>
<template>
    <nav ref="navbarRef" :class="{ 'bg-transparent': isHomePage, 'bg-standard': !isHomePage }"
        class="border-gray-200 dark:bg-gray-900 absolute w-full top-0 z-10 give-mg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-4 md:mx-auto pt-3 pb-4">
            <a :href="route('homepage')" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/imgs/logo-white.png" class="img-logo" alt="Ramapani Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a target="_blank" class="icons-socials" href="https://www.instagram.com/clinicarampani/">
                    <img src="/imgs/icons/instagram-white.png" alt="Icon Instagram">
                </a>
                <a target="_blank" class="icons-socials">
                    <img src="/imgs/icons/tiktok-white.png" alt="Icon Tiktok">
                </a>
                <a target="_blank" class="icons-socials" href="https://www.facebook.com/rampaniestetica">
                    <img src="/imgs/icons/facebook-white.png" alt="Icon Facebook">
                </a>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="font-medium p-4 md:p-0 mt-0 sm:mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700"
                    :class="{ 'navbar-background-white': isHomePage }">
                    <li class="flex flex-col sm:flex-row align-center">
                        <NavLink :href="route('homepage')" :active="route().current('homepage')">
                            Inicio
                        </NavLink>
                        <NavLink :href="route('procedures')" :active="route().current('procedures')">
                            Procedimentos
                        </NavLink>
                        <a href="https://clinicarampani.com.br/juliana-rampani/" target="_blank"
                            class="text-nav transition duration-150 ease-in-out">
                            Dra. Juliana Rampani
                        </a>
                        <NavLink :href="route('clinic')" :active="route().current('clinic')">
                            A Clínica
                        </NavLink>
                        <NavLink :href="route('blog')" :active="route().current('blog')">
                            Blog
                        </NavLink>
                        <NavLink href="#contact">
                            Contato
                        </NavLink>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
