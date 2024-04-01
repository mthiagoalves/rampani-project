<script>
import axios from "axios";
import Swal from "sweetalert2";
import vueFilePond from "vue-filepond";
import { ref, watchEffect } from "vue";


import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js";
import FilePondPluginImagePreview from "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.esm.js";
import FilePondPluginImageValidateSize from "filepond-plugin-image-validate-size";

import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
import "filepond/dist/filepond.min.css";

const FilePond = vueFilePond(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview,
    FilePondPluginImageValidateSize
);

function generateSlug(title) {
    return title.trim().toLowerCase().replace(/\s+/g, "-");
};

export default {
    props: {
        selectedCampaing: Object
    },
    components: {
        FilePond,
    },
    setup(props) {
        const slug = ref('');

        watchEffect(() => {
            if (props.selectedCampaing && props.selectedCampaing.slug) {
                slug.value = props.selectedCampaing.slug || "";
                myFileThumbnail.value = [`/imgs/campaigns/${slug.value}.jpg`];
                myFileBanner.value = [`/imgs/campaigns/${slug.value}-m.jpg`];
            }
        });


        const myFileThumbnail = ref([]);
        const myFileBanner = ref([]);

        return{
            myFileThumbnail,
            myFileBanner
        }
    },
    methods: {
        handleFilePondInit: function () {
            this.$refs.pond_banner_pc.getFiles();
            this.$refs.pond_banner_mobile.getFiles();
        },
        async submitFormUpdate() {
            let btnSubmit = document.querySelector(".send-form");
            btnSubmit.style.pointerEvents = "none";
            btnSubmit.innerHTML = `<div role="status"><svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg><span class="sr-only">Loading...</span></div>`;

            let slug = generateSlug(this.$refs.name.value);
            let bannerPc = this.$refs.pond_banner_pc.getFiles()[0];
            let bannerMobile = this.$refs.pond_banner_mobile.getFiles()[0];

            let formData = new FormData();

            formData.append('id', this.selectedCampaing.id);
            formData.append('name', this.$refs.name.value);
            formData.append('slug', slug);
            formData.append('type', this.$refs.type.value);
            formData.append('order', this.$refs.order.value);
            formData.append('is_active', this.$refs.is_active.checked);

            if (bannerPc) {
                formData.append('banner_pc', bannerPc.file);
            }
            if (bannerMobile) {
                formData.append('banner_mobile', bannerMobile.file);
            }

            try {
                const response = await axios.post(
                    "/backoffice/update-campain",
                    formData
                );
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    },
                    didClose: () => {
                        window.location.reload();
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: response.data.success,
                });

                (this.$refs.name.value = ""),
                    (this.$refs.type.value = "reset"),
                    (this.$refs.order.value = ""),
                    (this.$refs.is_active.checked = false),

                    this.$refs.pond_banner_pc.removeFiles();
                this.$refs.pond_banner_mobile.removeFiles();

                btnSubmit.style.pointerEvents = "all";
                btnSubmit.innerHTML = `<svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"clip-rule="evenodd"></path></svg>Salvar artigo`;
            } catch (error) {
                Swal.fire({
                    icon: "error",
                    title: "Erro!",
                    text: 'Algo aconteceu na atualização da campanha 😔',
                });
            }
        }
    },
}
</script>

<template>
    <div id="crud-modal-update" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Editando campanha: {{ selectedCampaing.name }}
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal-update">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" @submit.prevent="submitFormUpdate">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <div class="flex justify-between items-center">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome
                                    da campanha</label>
                                <div class="mb-2">
                                    <input id="is_active" type="checkbox" ref="is_active" name="is_active"
                                        :checked="selectedCampaing.is_active"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus-standard border-standard">
                                    <label for="is_active"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Campanha
                                        ativa?</label>
                                </div>
                            </div>
                            <input type="text" id="name" ref="name" name="name" :value="selectedCampaing.name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5"
                                placeholder="Digite o nome da campanha" required>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo da
                                campanha</label>
                            <select id="category" ref="type" name="type" required :value="selectedCampaing.type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5">
                                <option value="reset" selected disabled>Select category</option>
                                <option value="Comercial">Comercial</option>
                                <option value="Inspiracional">Inspiracional</option>
                                <option value="Novo Procedimento">Novo procedimento</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1 m-auto">
                            <label for="order"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ordem de
                                exibição</label>
                            <input type="number" id="order" ref="order" name="order" :value="selectedCampaing.order"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5"
                                placeholder="Em numero crescente" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="meta_description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Banner para PC
                                (Dimensões: 1800x600)</label>
                            <file-pond ref="pond_banner_pc" class-name="my-pond"
                                imageValidateSizeMaxWidth="1800" imageValidateSizeMinWidth="1800"
                                imageValidateSizeMaxHeight="600" imageValidateSizeMinHeight="600"
                                label-idle="Clique ou solte as imagens aqui (Dimensões: 1800x600)..."
                                allow-multiple="true" accepted-file-types="image/jpeg, image/png"
                                :files="myFileThumbnail" v-on:init="handleFilePondInit" aria-required="true" />
                        </div>
                        <div class="col-span-2 sm:col-span-2">
                            <label for="key-words"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Banner para celular
                                (Dimensões: 750x1100)</label>
                            <file-pond ref="pond_banner_mobile" class-name="my-pond"
                                imageValidateSizeMaxWidth="750" imageValidateSizeMinWidth="750"
                                imageValidateSizeMaxHeight="1100" imageValidateSizeMinHeight="1100"
                                label-idle="Clique ou solte as imagens aqui (Dimensões: 750x1100)..."
                                allow-multiple="true" accepted-file-types="image/jpeg, image/png"
                                :files="myFileBanner" v-on:init="handleFilePondInit" aria-required="true" />
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit"
                            class="text-white inline-flex items-center justify-end bg-standard font-medium rounded-lg text-sm px-5 py-2.5 text-end send-form">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Atualizar campanha
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
