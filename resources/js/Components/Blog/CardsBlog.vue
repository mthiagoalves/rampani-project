<script setup>
import { defineProps } from 'vue';

const props = defineProps(['posts']);

const formatCategories = (categories) => {
    if (!categories) return '';
    return categories.split(',').map(category => category.trim()).join(', ');
};

props.posts.map(post => ({
    ...post,
    categories: formatCategories(post.categories)
}));

</script>

<template>
    <div class="flex items-center w-screen first-section">
        <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">

            <div v-for="post in posts" :key="posts.id" class="w-full md:w-1/2 lg:w-1/3 pl-5 pr-5 my-2 /lg:pl-2 lg:pr-2">
                <a :href="`/blog/${post.slug}`">
                    <div
                        class="bg-white rounded-lg m-h-64 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                        <figure class="mb-2">
                            <img :src="`/imgs/posts/thumbnails/${post.slug}-thumbnail.jpg`" :alt="post.title" class="h-full rounded-lg ml-auto mr-auto" />

                        </figure>
                        <div class="overlay transition duration-300 rounded-lg flex items-center justify-center">
                            <h4 class="title-post px-6">{{ post.title }}</h4>
                            <img src="imgs/icons/open-book.png" alt="" class="h-16">
                            <div class="div-text-category">
                                <img src="/imgs/icons/tag.png" alt="" class="h-6">
                                <p class="category-post ml-1">{{ post.categories }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
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
    position: absolute;
    top: 30px;
    color: var(--color-white);
    font-size: 1.4rem;
    text-transform: uppercase;
    font-weight: 500;
}

.div-text-category{
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
