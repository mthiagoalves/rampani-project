<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Modal from '@/Components/Backoffice/Blog/Modal.vue';
import ModalCategories from '@/Components/Backoffice/Blog/ModalCategories.vue';
import ModalUpdate from '@/Components/Backoffice/Blog/ModalUpdate.vue';
import { defineProps, ref } from 'vue';

const { props, categories } = defineProps(['posts', 'categories']);

const selectedPost = ref('');

const sendContent = (article) => {
    selectedPost.value = article;
};

</script>

<template>

    <Head title="Backoffice - Blog" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Blog</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="block text-white bg-standard hover:bg-blue-800 m-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Novo Artigo
                    </button>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Todos os artigos</h2>
                    <button data-modal-target="crud-modal-categories" data-modal-toggle="crud-modal-categories"
                        class="block text-white bg-standard hover:bg-blue-800 m-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Nova Categoria
                    </button>
                </div>
            </div>
        </div>
        <div class="flex items-center w-screen first-section bg-transparent">
            <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
                <div v-for="post in posts" :key="post.id"
                    class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 my-2 /lg:pl-2 lg:pr-2 cursor-pointer">
                    <a data-modal-target="crud-modal-update" data-modal-toggle="crud-modal-update" @click="sendContent(post)">
                        <div
                            class="bg-white rounded-lg m-h-64 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                            <figure class="mb-2">
                                <img :src="`/imgs/posts/thumbnails/${post.slug}-thumbnail.jpg`" :alt="post.title"
                                    class="h-full rounded-lg ml-auto mr-auto" />
                            </figure>
                            <div class="overlay transition duration-300 rounded-lg flex items-center justify-center">
                                <h4 class="title-post">Clique para editar</h4>
                                <div class="div-text-category">
                                    <p class="category-post ml-1">{{ post.title }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <Modal :allCategories="categories" />
        <ModalCategories :allCategories="categories" />
        <ModalUpdate :allCategories="categories" :selectedPost="selectedPost" />
    </AuthenticatedLayout>
</template>

<style scoped>
.overlay {
    width: 100%;
    height: 100%;
    background-color: var(--color-standard);
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}

.overlay:hover {
    opacity: .9;
}

.title-post {
    color: var(--color-white);
    font-size: 1.4rem;
    text-transform: uppercase;
    font-weight: 500;
}

.div-text-category {
    position: absolute;
    bottom: 30px;
    display: flex;
}

.category-post {
    color: var(--color-white);
    font-size: 1.1rem;
    text-transform: uppercase;
    font-weight: 500;
}
</style>
