<script setup>
import { defineEmits, defineProps } from 'vue';

const props = defineProps(["selectedDeal"]);
const emit = defineEmits();

const setDeal = (deal) => {
    props.selectedDeal = deal;
    emit('setDeal', deal);
};
</script>

<template>
    <div id="extralarge-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-700 rounded-lg shadow dark:bbg-white">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-white dark:text-gray-900">
                        Estética Intima Masculina
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="extralarge-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-base leading-relaxed text-white dark:text-gray-400">
                        Descrição do procedimento
                    </p>

                </div>
                <div
                    class="flex items-center p-4 md:p-5 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                    <button type="button" data-modal-target="authentication-modal"
                        data-modal-toggle="authentication-modal"
                        class="btn-schedule py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                        @click="setDeal('Estetica Intima Masculina')">Agendar</button>
                    <button data-modal-hide="extralarge-modal" type="button"
                        class="btn-decline-landing py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none border border-white hover:bg-gray-100 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.btn-schedule {
    background-color: #690000;
    color: var(--color-white);
    transition: var(--transition-standard);
    border: 2px solid #690000;
}

.btn-schedule:hover {
    border-color: #ffffff;
}

.btn-decline-landing {
    color: var(--color-white);
    transition: var(--transition-standard);
}

.btn-decline-landing:hover {
    color: #ad0000;
}
</style>
