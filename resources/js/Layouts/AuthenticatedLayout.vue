<script setup>
import { ref, onMounted } from 'vue';
import { initFlowbite } from 'flowbite';

import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLinkBackoffice from '@/Components/NavLinkBackoffice.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-standard border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                <NavLinkBackoffice :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLinkBackoffice>
                                <NavLinkBackoffice :href="route('backoffice.homepage')"
                                    :active="route().current('backoffice.homepage')">
                                    Homepage
                                </NavLinkBackoffice>
                                <NavLinkBackoffice :href="route('backoffice.procedures')"
                                    :active="route().current('backoffice.procedures')">
                                    Procedimentos
                                </NavLinkBackoffice>
                                <NavLinkBackoffice :href="route('backoffice.campain')"
                                    :active="route().current('backoffice.campain')">
                                    Campanhas
                                </NavLinkBackoffice>
                                <NavLinkBackoffice :href="route('backoffice.blog')"
                                    :active="route().current('backoffice.blog')">
                                    Blog
                                </NavLinkBackoffice>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <!-- Settings Dropdown -->
                            <div class="ms-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-me-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{
                                    hidden: showingNavigationDropdown,
                                    'inline-flex': !showingNavigationDropdown,
                                }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{
                                    hidden: !showingNavigationDropdown,
                                    'inline-flex': showingNavigationDropdown,
                                }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">{{ $page.props.auth.user.email }}</div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.edit')"> Profile </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<style>
:root {
    --color-standard: #e4a2a3;
    --color-standard-hover: #ce9495;
    --color-white: #ffffff;
    --color-text-standard: #6b7280;
    --color-text-standard-hover: #374151;
    --color-text-clean: #d1d5db;
    --transition-standard: all 0.5s;
}

::selection {
    background-color: var(--color-standard);
    color: var(--color-white);
}

::-webkit-scrollbar {
    width: 5px;
}

::-webkit-scrollbar-track {
    background-color: #ebebeb;
}

::-webkit-scrollbar-thumb {
    background-color: var(--color-standard);
    opacity: 0;
    transition: opacity 0.3s;
}

::-webkit-scrollbar-thumb:hover {
    opacity: 1;
}

.focus-standard:focus,
.border-standard {
    border-color: var(--color-standard) !important;
    outline: none;
    box-shadow: 0 0 3px var(--color-standard) !important;
}

.bg-transparent {
    background-color: transparent;
}

.bg-standard {
    background-color: var(--color-standard);
    transition: var(--transition-standard);
}
.bg-standard:hover {
    background-color: var(--color-standard-hover);
}

.filepond--root .filepond--credits{
    display: none;
}
</style>
