<script setup>
import { ref } from 'vue';
import ModalProcedures from './ModalProcedures.vue';
import Modal from '@/Components/Modal.vue';

const selectedProcedure = ref(null);

const procedures = [
    { id: 1, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 1', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
    { id: 2, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 2', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
    { id: 3, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 3', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
    { id: 4, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 4', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
    { id: 5, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 5', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
    { id: 6, imgSrc: 'https://dummyimage.com/600x400/e4a2a3/fff', title: 'Procedimento 6', imgSrcMobile: 'https://dummyimage.com/600x400/e4a2a3/fff', content: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit facere est quod, corrupti, excepturi nesciunt quas dolor voluptate error natus sed, vel libero similique? Nostrum nobis praesentium consequatur assumenda dolorum ratione impedit beatae, veritatis error, voluptate, cupiditate et consectetur fuga recusandae saepe itaque expedita quam totam labore hic rem architecto quae? Fugiat consectetur voluptate illo architecto perspiciatis. Magnam nesciunt nulla laudantium neque? Laudantium nam, quod doloribus quam voluptatem veniam ipsam ducimus sequi. At earum perferendis voluptas quae assumenda distinctio, quibusdam quidem soluta quia cumque natus laborum ut officia vel quo maxime blanditiis veritatis possimus repellendus! Aut explicabo accusantium fugit? Corrupti accusantium fugiat quisquam aliquam aperiam beatae cupiditate assumenda deleniti in ipsum modi sit harum porro eveniet explicabo odit asperiores quo esse omnis consequuntur, officiis quos consequatur rem odio? Enim, vitae consequatur ab blanditiis non temporibus harum perferendis explicabo quaerat, deleniti, similique perspiciatis? Quas magni iste officiis. Adipisci quo eligendi consectetur.' },
];

const truncateContent = (content) => {
    const maxWords = 70;
    const words = content.split(' ');

    if (words.length <= maxWords) {
        return content;
    }

    const truncatedWords = words.slice(0, maxWords);
    return `${truncatedWords.join(' ')}...`;
};

const sendContent = (procedure) => {
    selectedProcedure.value = procedure;
};


const selectedDeal = ref(null);

const setDeal = (deal) => {
    selectedDeal.value = deal;
};
</script>

<template>
    <div class="container ml-auto mr-auto mt-32">
        <h1 class="text-3xl lg:text-4xl title-section text-center">
            Procedimentos
        </h1>
        <p class="text-center sm:mb-10">
            Os procedimentos menos invasivos do mercado, com a melhor tecnologia!
        </p>
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 gap-4 sm:px-0 px-4 md:mt-0 mt-6">
            <div v-for="procedure in procedures" :key="procedure.id"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg md:h-auto md:w-4/12 md:rounded-none md:rounded-s-lg"
                    :src="procedure.imgSrc" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ procedure.title
                        }}
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ truncateContent(procedure.content)
                        }}</p>
                    <button class="btn-know-more" data-modal-target="extralarge-modal"
                        data-modal-toggle="extralarge-modal" @click="sendContent(procedure)">
                        <p>
                            Ler mais >>
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <ModalProcedures :selectedProcedure="selectedProcedure" :selectedDeal="selectedDeal" @setDeal="setDeal"></ModalProcedures>
    <Modal :selectedDeal="selectedDeal"></Modal>

</template>

<style>
.btn-know-more {
    text-align: end;
}

.btn-know-more:focus {
    border: none;
}

.btn-know-more p {
    display: inline-block;
    background-color: var(--color-standard);
    padding: 10px 20px;
    color: #ffffff;
    border-radius: 25px 0px;
}
</style>
