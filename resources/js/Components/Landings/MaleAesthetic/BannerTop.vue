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
    <div class="mx-auto relative">
        <div class="gradient-div"></div>
        <div class="flex">
            <div class="w-100">
                <img
                    src="https://dummyimage.com/1920x800/ad9345/fff"
                    alt=""
                    class="img-banner hidden sm:block"
                />
                <img
                    src="https://dummyimage.com/850x1350/ad9345/fff"
                    alt=""
                    class="img-banner block sm:hidden"
                />
            </div>
        </div>
        <div class="text-banner absolute">
            <p>
                Estética Intima <br class="sm:block"> Masculina
            </p>
            <li class="mb-1">
                + Auto estima
            </li>
            <li class="mb-1">
                + Confiança
            </li>
            <li class="mb-1">
                + Prazer!
            </li>
            <a
                type="button"
                data-modal-target="authentication-modal"
                data-modal-toggle="authentication-modal"
                @click="setDeal('Agendamento geral')"
            >
                Conheça agora!
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
    font-size: 4rem;
    font-weight: 700;
    color: var(--color-white);
    line-height: 1;
    text-transform: uppercase;
}

.text-banner li {
    list-style: none;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--color-white);
    line-height: 1;
    text-transform: uppercase;
}

.text-banner a {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 15px;
    background-color: #690000;
    cursor: pointer;
    transition: var(--transition-standard);
    margin-top: 1rem;
}

.text-banner a:hover {
    background-color: #4b0000;
}

@media (max-width: 756px) {
    .text-banner {
        top: 15%;
    }
}

.gradient-div {
    position: absolute;
    top: 0;
    width: 100%;
    height: 150px;
    background: rgb(61, 0, 0);
    background: linear-gradient(
        180deg,
        rgba(61, 0, 0, 1) 0%,
        rgba(75, 0, 0, 0.7609418767507002) 37%,
        rgba(105, 0, 0, 0.42200630252100846) 63%,
        rgba(184, 0, 0, 0) 100%
    );
}
</style>
