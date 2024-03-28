<script setup>
import { defineProps } from 'vue';

const { allCategories } = defineProps(['allCategories']);

const addCategory = () => {
    // Encontre o elemento tr pelo id
    const tr = document.getElementById('tr-table');

    // Crie os elementos td para o input e o botão
    const inputTd = document.createElement('td');
    const buttonTd = document.createElement('td');
    const newTr = document.createElement('tr');

    inputTd.classList = 'pl-6 py-4';
    buttonTd.classList = 'px-6 py-4 text-center';

    const input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.className = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5';
    input.setAttribute('placeholder', 'Digite o nome da categoria');


    const button = document.createElement('button');
    button.textContent = 'Salvar';
    button.className = 'text-white cursor-pointer inline-flex items-center justify-end bg-standard rounded-lg text-sm px-4 py-2 ';
    button.addEventListener('click', () => {
        // Adicione aqui a lógica para salvar a nova categoria
        console.log('Salvar nova categoria');
    });

    // Adicione os elementos ao td correspondente
    inputTd.appendChild(input);
    buttonTd.appendChild(button);

    // Adicione os td ao tr
    newTr.appendChild(inputTd);
    newTr.appendChild(buttonTd);
    tr.appendChild(newTr);
};</script>
<template>
    <div id="crud-modal-categories" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Categorias
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal-categories">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>


                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Categoria
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tr-table">
                            <tr v-for="(category, index) in allCategories" :key="index"
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ category.name }}
                                </td>
                                <td class="px-4 inline-flex">
                                    <a href="#"
                                        class="hover:underline m-2 transition-all duration-300 hover:animate-bounce">
                                        <img src="/imgs/icons/pen.png" alt="" class="h-6 mx-1"></a>
                                    <a href="#"
                                        class="hover:underline m-2 transition-all duration-300 hover:animate-bounce">
                                        <img src="/imgs/icons/trash.png" alt="" class="h-6 mx-1">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end m-4">
                        <a @click="addCategory"
                            class="text-white cursor-pointer inline-flex items-center justify-end bg-standard rounded-lg text-sm px-4 py-2 text-end"
                            id="add-categorie">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
