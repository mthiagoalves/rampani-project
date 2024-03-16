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
    <div class="sm:h-custom bg-gray-200 sm:my-16">
        <div class="container mx-auto flex flex-col items-center justify-center h-full">
            <div class="w-full h-full flex flex-col justify-center items-center sm:flex-row">
                <div class="w-full sm:w-2/6 px-6 my-10 order-2 sm:order-1 text-center sm:text-left">
                    <h1 class="text-3xl lg:text-3xl title-section">
                        100% de satisfação <br class="sm:block hidden"> garantida
                    </h1>
                    <p class="mt-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla ut quidem quas velit expedita
                        commodi reiciendis, minima totam neque incidunt?
                    </p>
                    <a type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        @click="setDeal('Estetica intima Masculina')" class="btn-landing-schedule">
                        Agendar agora!
                    </a>
                </div>
                <div class="w-full sm:w-2/4 sm:h-64 sm:relative order-1 sm:order-2">
                    <div class="sm:absolute w-full h-full div-abs-img">
                        <img src="https://dummyimage.com/850x850/242424/0011ff" alt="" class="sm:w-9/12 sm:ml-auto">
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

.div-abs-img {
    top: -50%;
}

.btn-landing-schedule {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 15px;
    background-color: #690000;
    cursor: pointer;
    transition: var(--transition-standard);
    margin-top: 1.25rem;
}

.btn-landing-schedule:hover {
    background-color: #4b0000;
}

@media (min-width: 640px) {
    .sm\:h-custom {
        height: 20rem;
    }
}


@media(min-width: 756px) {
    .div-abs-img img {
        border-radius: 50%;
    }
}
</style>
