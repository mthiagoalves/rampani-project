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
    <div class="flex items-center w-screen first-section">
        <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
            <div class="w-full px-6 my-10">
                <h1 class="text-3xl lg:text-3xl title-section">
                    Lorem ipsum dolor sit amet.
                </h1>
                <h3 class="text-xl lg:text-lg sub-title-section">
                    Lorem ipsum, dolor sit amet <br class="sm:block hidden">
                    consectetur adipisicing elit. Nobis, autem.
                </h3>
                <p class="sm:px-24 mt-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa alias aut, quam sint quisquam nostrum
                    est magni impedit? Sequi placeat alias maxime ullam dolor, qui vitae at ab praesentium quam dolorum
                    deserunt similique nesciunt eaque a quae error enim accusamus sapiente distinctio cupiditate eveniet
                    atque obcaecati recusandae. Quae, possimus temporibus.
                </p>
                <a type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    @click="setDeal('Mais informações')" class="btn-more-info">
                    MAIS INFO
                </a>
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

.sub-title-section {
    color: #ad0000;
    text-transform: uppercase;

}

a.btn-more-info {
    margin-top: 2rem;
    border: 2px solid #121212;
    width: 150px;
    padding: 15px 0px;
    cursor: pointer;
    font-size: 18px;
    transition: color 0.5s, transform 0.2s, background-color 0.2s;
    border-radius: 1px;
}

a.btn-more-info:hover {
    background-color: #121212;
    color: #ffffff;
}
</style>
