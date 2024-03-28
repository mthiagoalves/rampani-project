<script>
import Editor from "@tinymce/tinymce-vue";
import axios from "axios";
import Swal from "sweetalert2";
import { ref, watch } from "vue";
import vueFilePond from "vue-filepond";

import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.esm.js";
import FilePondPluginImagePreview from "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.esm.js";
import FilePondPluginImageValidateSize from "filepond-plugin-image-validate-size";

import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";

const FilePond = vueFilePond(
    FilePondPluginFileValidateType,
    FilePondPluginImagePreview,
    FilePondPluginImageValidateSize
);


export default {
    props: ['allCategories'],
    components: {
        tinymce: Editor,
        FilePond,
    },
    setup() {
        const title = ref("");
        const link = ref("");
        const slug = ref("");

        function generateSlug(title) {
            return title.trim().toLowerCase().replace(/\s+/g, "-");
        }

        watch(title, (newVal) => {
            link.value =
                "https://clinicarampani.com.br/blog/" + generateSlug(newVal);
            slug.value = generateSlug(newVal);
        });
        return {
            title,
            link,
            slug,
        };
    },
    methods: {
        handleFilePondInit: function () {
            console.log("FilePond has initialized");
            this.$refs.pond_thumbnail.getFiles();
            this.$refs.pond_banner.getFiles();
        },
        async submitForm() {
            let btnSubmit = document.querySelector(".send-form");
            btnSubmit.style.pointerEvents = "none";
            btnSubmit.innerHTML = `<div role="status"><svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg><span class="sr-only">Loading...</span></div>`;

            const myContent = tinymce.get("description_value").getContent();

            let thumbnailFile = this.$refs.pond_thumbnail.getFiles()[0];
            let bannerFile = this.$refs.pond_banner.getFiles()[0];

            const checkboxes = document.querySelectorAll('input[type="checkbox"]');

            const selectedValues = [];

            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    selectedValues.push(checkbox.value);
                }
            });

            let formData = new FormData();

            formData.append('title', this.$refs.title_value.value);
            formData.append('slug', this.$refs.slug_value.value);
            formData.append('sub_title', this.$refs.sub_title.value);
            formData.append('category', selectedValues);
            formData.append('published_in', this.$refs.published_in.value);
            formData.append('description', myContent);
            formData.append('meta_description', this.$refs.meta_description.value);
            formData.append('key_words', this.$refs.key_words.value);

            if (thumbnailFile) {
                formData.append('thumbnail', thumbnailFile.file);
            }
            if (bannerFile) {
                formData.append('banner', bannerFile.file);
            }

            try {
                const response = await axios.post(
                    "/backoffice/create-post",
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

                (this.$refs.title_value.value = ""),
                (this.$refs.slug_value.value = ""),
                (this.$refs.link_value.value = ""),
                (this.$refs.sub_title.value = ""),
                (this.$refs.published_in.value = ""),
                (this.$refs.meta_description.value = ""),
                (this.$refs.key_words.value = ""),
                checkboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                tinymce.activeEditor.setContent("");
                this.$refs.pond_thumbnail.removeFiles();
                this.$refs.pond_banner.removeFiles();

                btnSubmit.style.pointerEvents = "all";
                btnSubmit.innerHTML = `<svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd"d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"clip-rule="evenodd"></path></svg>Salvar artigo`;
            } catch (error) {
                Swal.fire({
                    icon: "error",
                    title: "Erro!",
                    text: error.error,
                });
            }
        },
    },
    data() {
        return {
            myFileThumbnail: [],
            myFileBanner: [],
            name: "sample",
            myModel: "",
            myToolbar:
                "undo redo | fontselect fontsizeselect forecolor backcolor | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code",
            myPlugins:
                "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode mentions",
            myInit: {
                images_dataimg_filter: function (img) {
                    return false;
                    return img.hasAttribute("internal-blob");
                },
                convert_urls: false,
                height: 550,
                automatic_uploads: false,
                images_upload_base_path: "/../../",
                relative_urls: false,
                images_upload_handler: function (
                    blobInfo,
                    success,
                    failure,
                    folderName
                ) {
                    var xhr, formData;
                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;

                    xhr.open("POST", "/backoffice/image-post-upload");
                    var token =
                        document.head.querySelector(
                            "[name=csrf-token]"
                        ).content;
                    xhr.setRequestHeader("X-CSRF-Token", token);

                    xhr.onload = function () {
                        var json;

                        if (xhr.status != 200) {
                            failure("HTTP Error: " + xhr.status);
                            return;
                        }
                        json = JSON.parse(xhr.responseText);

                        if (!json || typeof json.location != "string") {
                            failure("Invalid JSON: " + xhr.responseText);
                            return;
                        }
                        success(json.location);
                    };

                    formData = new FormData();
                    formData.append(
                        "file",
                        blobInfo.blob(),
                        blobInfo.filename()
                    );

                    xhr.send(formData);
                },
                content_style:
                    "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
            },
        };
    },
};
</script>

<template>
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-full max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Criando novo artigo
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form class="p-4 md:p-5" @submit.prevent="submitForm">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo do
                                artigo</label>
                            <input type="text" ref="title_value" id="title" v-model="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Escreva o titulo do artigo" required="" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="link"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                            <input type="text" ref="link_value" id="link" v-model="link"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="https://clinicarampani.com.br/blog/" disabled />
                            <input type="hidden" ref="slug_value" id="slug" v-model="slug" class="hidden" required=""
                                disabled />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="sub-title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtitulo (Se
                                houver)</label>
                            <input type="text" name="sub_title" id="sub-title" ref="sub_title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Escreva o subtitulo do artigo (Se houver)" required="" />
                        </div>
                        <div class="grid gap-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="category"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
                                    class="text-white inline-flex items-center justify-between bg-standard font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-full"
                                    type="button">Selecione a categoria do artigo <svg class="w-2.5 h-2.5 ms-3"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>

                                <div id="dropdownDefaultCheckbox"
                                    class="z-10 hidden w-80 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul id="checkboxList" class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownCheckboxButton">
                                        <li v-for="(category, index) in allCategories" :key="index">
                                            <div class="flex items-center">
                                                <input :id="'checkbox-item-' + index" type="checkbox"
                                                    :value="category.name"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                <label :for="'checkbox-item-' + index"
                                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{
                    category.name }}</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="published_in"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data de
                                    Publicação</label>
                                <input type="date" name="published_in" id="published_in" ref="published_in"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required="" />
                            </div>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="meta_description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta
                                description</label>
                            <input type="text" name="meta_description" id="meta_description" ref="meta_description"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Escreva a meta description do artigo" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="key-words"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Key words</label>
                            <input type="text" name="key-words" id="key-words" ref="key_words"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="blog, artigos, clinica, estetica, rampani..." />
                        </div>
                        <div class="col-span-2" id="sample">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escreva o conteudo
                                do artigo</label>
                            <tinymce :plugins="myPlugins" :toolbar="myToolbar" :init="myInit" id="description_value"
                                api-key="xsaytgoxknpqs66x5benfgbmcqllvd7csc142rphf8g9rcaj">
                            </tinymce>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="meta_description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagem de
                                capa (Dimensões: 850x950)</label>
                            <file-pond name="thumbnail" ref="pond_thumbnail" class-name="my-pond"
                                imageValidateSizeMaxWidth="850" imageValidateSizeMinWidth="850"
                                imageValidateSizeMaxHeight="950" imageValidateSizeMinHeight="950"
                                label-idle="Clique ou solte as imagens aqui (Dimensões: 850x950)..."
                                allow-multiple="true" accepted-file-types="image/jpeg, image/png"
                                :files="myFileThumbnail" v-on:init="handleFilePondInit" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="key-words"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Banner do
                                artigo (Dimensões: 1500x400)</label>
                            <file-pond name="banner" ref="pond_banner" class-name="my-pond"
                                imageValidateSizeMaxWidth="1500" imageValidateSizeMinWidth="1500"
                                imageValidateSizeMaxHeight="400" imageValidateSizeMinHeight="400"
                                label-idle="Clique ou solte as imagens aqui (Dimensões: 1500x400)..."
                                allow-multiple="true" accepted-file-types="image/jpeg, image/png"
                                v-on:init="handleFilePondInit" />
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit"
                            class="text-white inline-flex items-center justify-end bg-standard font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 send-form">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Salvar artigo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style></style>
