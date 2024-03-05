<script setup>
import { defineEmits, defineProps } from 'vue';

const props = defineProps(['selectedDeal']);
const emit = defineEmits();

const setDeal = (deal) => {
    props.selectedDeal = deal;
    emit('setDeal', deal);
};
</script>

<template>
    <div class="mx-auto relative">
        <div class="flex">
            <div class="w-100">
                <img src="/imgs/aesthetics.png" alt="" class="img-banner hidden sm:block">
                <img src="/imgs/aesthetics-m.png" alt="" class="img-banner block sm:hidden">
            </div>
        </div>
        <div class="text-banner absolute">
            <p>Onde a beleza começa <br class="hidden sm:block"> quando você decide <br class="hidden sm:block">
                se cuidar!
            </p>
            <a type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                @click="setDeal('Agendamento geral')">
                Agende agora!
            </a>
        </div>
        <div class="scroll-down-1"></div>
        <div class="scroll-down-2"></div>
    </div>
</template>

<style scoped>
@keyframes scrolldown {
    0% {
        transform: translateY(20%) rotate(45deg);
        opacity: 0.7;
    }

    50% {
        transform: translateY(0%) rotate(45deg);
        opacity: 0.2;
    }

    100% {
        transform: translateY(20%) rotate(45deg);
        opacity: 0.7;
    }
}

.scroll-down-1,
.scroll-down-2 {
    width: 2em;
    height: 2em;
    background-color: transparent;
    z-index: 10;
    position: absolute;
    border-width: 0 0.25em 0.25em 0;
    border-style: solid;
    border-color: #ffffff;
    animation: scrolldown 1.2s ease-in-out infinite 0.15s;
    left: 50%;
    transform: translateY(0%) rotate(45deg);
    opacity: 0;
}

.scroll-down-1 {
    bottom: 25px;

}

.scroll-down-2 {
    bottom: 40px;

}

.text-banner {
    top: 30%;
    left: 8%;
}

.text-banner p {
    font-size: 3rem;
    font-weight: 600;
    color: var(--color-white);
    line-height: 1;
    margin-bottom: 2rem;
    text-transform: uppercase;
}

.text-banner a {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-standard);
    text-transform: uppercase;
    padding: 15px;
    background-color: var(--color-white);
    border-radius: 25px 0px;
    cursor: pointer;
    transition: var(--transition-standard);
}

.text-banner a:hover {
    background-color: #ececec;
}

@media(max-width: 756px) {
    .text-banner {
        top: 15%;
    }
}
</style>
