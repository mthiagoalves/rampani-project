<script setup>
import { defineProps } from 'vue';
import axios from "axios";
import Swal from "sweetalert2";
const { allCategories } = defineProps(['allCategories']);

function generateSlug(title) {
    return title.trim().toLowerCase().replace(/\s+/g, "-");
}

const addCategory = async () => {
    const tr = document.getElementById('tr-table');

    const inputTd = document.createElement('td');
    const buttonTd = document.createElement('td');
    const newTr = document.createElement('tr');

    inputTd.classList = 'pl-6 py-4';
    buttonTd.classList = 'px-6 py-4 text-center';

    const input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.className = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5';
    input.setAttribute('placeholder', 'Digite o nome da categoria');
    input.setAttribute('id', 'category');


    const button = document.createElement('button');
    button.textContent = 'Salvar';
    button.className = 'text-white cursor-pointer inline-flex items-center justify-end bg-standard rounded-lg text-sm px-4 py-2 ';

    inputTd.appendChild(input);
    buttonTd.appendChild(button);

    newTr.appendChild(inputTd);
    newTr.appendChild(buttonTd);
    tr.appendChild(newTr);

    button.addEventListener('click', async () => {

        const category = document.getElementById('category').value;

        let slug = generateSlug(category);

        let formData = new FormData();

        formData.append('name', category);
        formData.append('slug', slug);

        button.style.pointerEvents = 'nome';
        button.innerHTML = `<div role="status"><svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg><span class="sr-only">Loading...</span></div>`;

        try {
            const response = await axios.post(
                "/backoffice/create-category",
                formData
            );


            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                },
            });
            Toast.fire({
                icon: "success",
                title: response.data.success,
            });

            allCategories.push({ name: category });

            newTr.remove();

        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Erro!",
                text: error.error,
            });
        }

    });
};

const removeCategory = async (index, categorySlug) => {
    const slugCategory = categorySlug;

    let formData = new FormData;

    formData.append('slug', slugCategory);

    Swal.fire({
        title: "Tem certeza?",
        text: "A categoria vai ser deletada pra sempre!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#e4a2a3",
        cancelButtonColor: "#666666",
        confirmButtonText: "Sim, quero deletar!"
    }).then(async (result) => {
        if (result.isConfirmed) {
            try {
                const response = await axios.post(
                    "/backoffice/remove-category",
                    formData
                );

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 4000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    },
                });
                Toast.fire({
                    icon: "success",
                    title: response.data.success,
                });

                allCategories.splice(index, 1);

            } catch (error) {
                Swal.fire({
                    icon: "error",
                    title: "Erro!",
                    text: 'Aconteceu algum erro na remoção da categoria',
                });
            }

        }
    });

};

const updateCategory = async (index, slug, name) => {
    const slugCategory = slug;
    const nameCategory = name;

    const { value: updatedName } = await Swal.fire({
        title: `Atualize a categoria: ${nameCategory}`,
        input: "text",
        inputAttributes: {
            autocapitalize: "off"
        },
        inputValue: nameCategory,
        showCancelButton: true,
        confirmButtonColor: "#e4a2a3",
        cancelButtonColor: "#666666",
        confirmButtonText: "Atualizar"
    });

    if (updatedName) {
        try {
            const formData = new FormData();
            formData.append('old_slug', slugCategory);
            formData.append('name', updatedName);
            formData.append('slug', generateSlug(updatedName));

            const response = await axios.post("/backoffice/update-category", formData);

            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 4000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                },
            });
            Toast.fire({
                icon: "success",
                title: response.data.success,
            });

            allCategories[index] = { slug: generateSlug(updatedName), name: updatedName };

        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Erro!",
                text: error.error,
            });
        }
    }
};

</script>
<template>
    <div id="crud-modal-categories" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
                                <td
                                    :class="['px-6', 'py-4', 'font-medium', 'text-gray-900', 'whitespace-nowrap', 'dark:text-white', 'td-update-category' + index]">
                                    {{ category.name }}
                                </td>
                                <td class="px-4 inline-flex">
                                    <a @click="updateCategory(index, category.slug, category.name)"
                                        :class="['hover:underline', 'm-2', 'cursor-pointer', 'cta-update-category-' + index]">
                                        <img src="/imgs/icons/pen.png" alt="" class="h-6 mx-1"></a>
                                    <a @click="removeCategory(index, category.slug)"
                                        :class="['hover:underline', 'm-2', 'cursor-pointer', 'cta-remove-category-' + index]">
                                        <img src="/imgs/icons/trash.png" alt="" class="h-6 mx-1">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end m-4">
                        <a @click="addCategory"
                            class="text-white cursor-pointer inline-flex items-center justify-end bg-standard rounded-lg text-sm px-4 py-2 text-end"
                            id="add-category">
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
