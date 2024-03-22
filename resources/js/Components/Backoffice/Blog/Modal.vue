<script setup>
import Editor from '@tinymce/tinymce-vue'

import { ref, watch } from 'vue';

const title = ref('');
const slug = ref('');

function generateSlug(title) {
    return title.trim().toLowerCase().replace(/\s+/g, '-');
}

watch(title, (newVal) => {
    slug.value = 'https://clinicarampani.com.br/blog/' + generateSlug(newVal);
});
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
                <form class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo do
                                artigo</label>
                            <input type="text" name="name" id="name" v-model="title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Escreva o titulo do artigo" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="slug"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link</label>
                            <input type="text" name="slug" id="slug" v-model="slug"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="https://clinicarampani.com.br/blog/" required="" disabled>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="sub-title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subtitulo (Se
                                houver)</label>
                            <input type="text" name="sub-title" id="sub-title"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Escreva o subtitulo do artigo (Se houver)" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                            <select id="category"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-standard border-standard block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option selected="" disabled>Selecione uma Categoria</option>
                                <option value="Bumbum">Bumbum</option>
                                <option value="CLiníca de Estética">Cliníca de Estética</option>
                                <option value="Cuidados">Cuidados</option>
                                <option value="Dicas">Dicas</option>
                                <option value="Drenagem Linfática">Drenagem Linfática</option>
                                <option value="Estética">Estética</option>
                                <option value="Estética Preventiva">Estética Preventiva</option>
                                <option value="Harmonização de Glúteos">Harmonização de Glúteos</option>
                                <option value="PRocedimento Estético">Procedimentos Estéticos</option>
                                <option value="Rampani">Rampani</option>
                                <option value="Saúde">Saúde</option>
                                <option value="Tratamento Estético">Tratamento Estético</option>
                                <option value="Verão">Verão</option>
                            </select>
                        </div>
                        <div class="col-span-2" id="sample">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Escreva o conteudo
                                do artigo</label>
                            <Editor api-key="xsaytgoxknpqs66x5benfgbmcqllvd7csc142rphf8g9rcaj" :init="{
                                toolbar_mode: 'sliding',
                                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode mentions',
                                toolbar: 'undo redo | fontselect fontsizeselect forecolor backcolor | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
                            }">
                            </Editor>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit"
                            class="text-white inline-flex items-center justify-end bg-standard font-medium rounded-lg text-sm px-5 py-2.5 text-end dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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

<style>
.tox .tox-tinymce {
    border-radius: .5rem;
}
</style>
