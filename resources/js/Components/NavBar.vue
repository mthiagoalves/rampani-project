<script setup>
import { onMounted } from 'vue';
import { Head } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';
import { initFlowbite } from 'flowbite';

onMounted(() => {
    initFlowbite();
});
</script>
<template>
    <Head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="title" property="og:title" content="Clinica Rampani">
        <meta name="description" property="og:description" content="meta decription here">
        <meta name="image" property="og:image" content="/imgs/icons/title-icon.png">
        <link rel="icon" href="/imgs/icons/title-icon.png">
        <link href="/css/style.css" rel="stylesheet">
    </Head>



    <nav class="bg-transparent border-gray-200 dark:bg-gray-900 fixed w-full top-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-4 md:mx-auto pt-3 pb-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/imgs/logo-white.png" class="img-logo" alt="Ramapani Logo" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a target="_blank" class="icons-socials">
                    <img src="/imgs/icons/instagram-white.png" alt="Icon Instagram">
                </a>
                <a target="_blank" class="icons-socials">
                    <img src="/imgs/icons/tiktok-white.png" alt="Icon Tiktok">
                </a>
                <a target="_blank" class="icons-socials">
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
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent"
                id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
                    <li>
                        <NavLink :href="route('homepage')" :active="route().current('homepage')">
                            Inicio
                        </NavLink>
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Procedimentos
                        </NavLink>
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dra. Juliana Rampani
                        </NavLink>
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Blog
                        </NavLink>
                        <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Contato
                        </NavLink>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
