<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import Swal from 'sweetalert2';

import MainLayout from '@/Layouts/MainLayout.vue';
import CtaSchedule from '@/Components/CtaSchedule.vue';
import Modal from '@/Components/Modal.vue';

const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};

const copyLink = (event) => {
    event.preventDefault(); // Evita o comportamento padrão do link

    // Obtém o link atual da página
    const url = window.location.href;

    // Cria um elemento de input temporário
    const input = document.createElement('input');
    input.value = url;
    document.body.appendChild(input);

    // Seleciona e copia o conteúdo do input
    input.select();
    document.execCommand('copy');

    // Remove o input temporário
    document.body.removeChild(input);


    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "Link copiado, ja pode compartilhar!"
    });
};

</script>
<template>

    <Head>
        <title>{{ $page.props.title }}</title>
        <meta head-key="description" name="description" content="This is a page specific description" />
    </Head>
    <MainLayout>
        <template #main>
            <div class="title-background h-64 flex flex-col justify-center align-center sm:mb-16 mb-10 relative"
                :style="{ backgroundImage: `url('/imgs/posts/banners/${ $page.props.post.slug}-banner.jpg')` }">

                <div class="overlay">
                </div>
                <div class="text-banner">
                    <h1 class="text-3xl lg:text-4xl text-center py-6 title-section uppercase">
                        {{ $page.props.post.title }}
                    </h1>
                    <div class="flex align-center justify-center">
                        <img src="/imgs/icons/tag.png" alt="" class="h-6">
                        <p class="text-2xl text-white ml-1">{{ $page.props.post.category_id }}</p>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <p></p>
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 px-4 sm:px-0">
                    <div class="lg:col-span-2">
                        <p v-html="$page.props.post.description"></p>
                    </div>
                    <div class="sm:block hidden flex flex-col">
                        <a :href="route('male-aesthetic')">
                            <img src="https://dummyimage.com/500x700/754c75/fff" alt="">
                        </a>
                        <div class="mt-4">
                            <p>
                                Acompanhe-nos nas redes sociais
                            </p>
                            <div class="flex mt-4 justify-start sm:mt-2">
                                <a target="_blank" class="social-icons"
                                    href="https://www.instagram.com/clinicarampani/">
                                    <img src="/imgs/icons/instagram.png" alt="Icon Instagram" class="mr-4">
                                </a>
                                <a target="_blank" class="social-icons">
                                    <img src="/imgs/icons/tiktok.png" alt="Icon Tiktok" class="mr-4">
                                </a>
                                <a target="_blank" class="social-icons" href="https://www.facebook.com/rampaniestetica">
                                    <img src="/imgs/icons/facebook.png" alt="Icon Facebook" class="mr-4">
                                </a>
                                <a class="social-icons" href="#" @click="copyLink($event)" title="Copiar Link">
                                    <img src="/imgs/icons/share.png" alt="Icon Share">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <CtaSchedule :selectedDeal="selectedDeal" @setDeal="setDeal"></CtaSchedule>

            <Modal :selectedDeal="selectedDeal"></Modal>
        </template>

    </MainLayout>
</template>


<style scoped>
.align-center {
    align-items: center;
}

.title-background {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: #12121266;
    z-index: 1;
}

.text-banner {
    position: absolute;
    z-index: 2;
}

.social-icons img {
    transition: var(--transition-standard);
    cursor: pointer;
}

.social-icons img {
    max-width: 30px;
}

.social-icons img:hover {
    transform: scale(1.1);
}
</style>
