<script setup>
import { defineEmits, defineProps } from "vue";

const props = defineProps(["selectedDeal"]);
const emit = defineEmits();

const setDeal = (deal) => {
    props.selectedDeal = deal;
    emit("setDeal", deal);
};
</script>
<template>
    <div class="w-screen first-section">
        <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
            <div class="w-full px-6 my-10">
                <h1 class="text-3xl lg:text-3xl title-section">
                    Clientes satisfeitos <br class="sm:block hidden"> e que deram seus depoimentos
                </h1>
            </div>
            <div class="flex items-center w-screen first-section">
                <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">

                    <div v-for="index in 3" :key="index" class="w-full md:w-1/2 lg:w-3/12 sm:m-6 m-10 card-depoiment">
                        <div class="bg-white h-64 hover:shadow-xl transition duration-300 relative flex flex-col">
                            <div class="div-abs-top absolute">
                                <img src="imgs/icons/quote-left.png" alt="" class="h-20">
                            </div>
                            <div class="div-abs-bottom absolute">
                                <img src="imgs/icons/quote-right.png" alt="" class="h-20">
                            </div>

                            <h3 class="customer-name mt-8">
                                Joao Paulo
                            </h3>
                            <p class="customer-city"> Berueri, SP </p>

                            <p class="mt-6 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Distinctio id labore quod voluptatem temporibus in explicabo vitae!</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.first-section {
    background-color: var(--color-white);
    text-align: center;
}

.title-section {
    font-weight: 600;
    color: #121212;
    text-transform: uppercase;
}

.card-depoiment {
    cursor: auto;
    border: 1px solid #121212
}

.div-abs-top,
.div-abs-bottom {
    background-color: #121212;
}

.div-abs-top {
    top: -25px;
    left: -25px
}

.div-abs-bottom {
    bottom: -25px;
    right: -25px;
}

.customer-name,
.customer-city {
    text-transform: uppercase;
    font-weight: 700;
    color: #ad0000;
}

.customer-name {
    font-size: 1.3rem;
}
</style>
