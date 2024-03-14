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
    <div class="mt-6 w-full flex justify-center">
        <a type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            @click="setDeal('Conheça a clinica')" class="cta-schedule">
            Conheça nossa clínica!
        </a>
    </div>
</template>

<style>
.cta-schedule {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 15px;
    background-color: var(--color-standard);
    border-radius: 25px 0px;
    cursor: pointer;
    transition: var(--transition-standard);
}

.cta-schedule:hover {
    background-color: var(--color-standard-hover);
}
</style>
