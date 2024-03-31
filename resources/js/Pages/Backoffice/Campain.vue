<script setup>
import Modal from '@/Components/Backoffice/Campain/Modal.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const campaigs = defineProps(['campaings']);

</script>

<template>

    <Head title="Backoffice - Campanhas" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Campanhas</h2>
        </template>

        <div class="pt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex sm:justify-center justify-end items-center relative">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-standard hover:bg-blue-800 m-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 absolute left-0"
                        type="button">
                        Nova Campanha
                    </button>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight px-5 py-2.5 m-4">Todos as campanhas
                    </h2>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name da campanha
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tipo da campanha
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ação
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="campaign in campaings" :key="campaign.id"
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-12 h-12 rounded-full" :src="`/imgs/campaigns/${campaign.slug}-m.jpg`"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{campaign.name}}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        {{campaign.type}}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div :class="{ 'h-2.5 w-2.5 rounded-full bg-green-500 me-2': campaign.is_active === 1, 'h-2.5 w-2.5 rounded-full bg-red-500 me-2': campaign.is_active === 0 }"></div> {{ campaign.is_active === 1 ? 'Online' : 'Offline' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar
                                            campanha</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <Modal />
    </AuthenticatedLayout>
</template>
