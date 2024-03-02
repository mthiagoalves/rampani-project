<script setup>
    import ModalProcedures from './ModalProcedures.vue';
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
            <div v-for="index in 6" :key="index"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg md:h-auto md:w-4/12 md:rounded-none md:rounded-s-lg"
                    src="https://dummyimage.com/600x400/e4a2a3/fff" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Procedimento 1</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Eos, voluptatum quidem? Nam itaque dolorem ratione nulla in quisquam commodi
                        reprehenderit optio, odit sit repellat alias dolore voluptates necessitatibus! Omnis accusamus quasi
                        suscipit corporis. Vel soluta debitis, nulla neque id dicta? Impedit quod quis quaerat illo labore
                        ipsum nemo esse possimus.</p>
                    <button class="btn-know-more" data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                        data-procedures="">
                        <p>
                            Ler mais >>
                        </p>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <ModalProcedures></ModalProcedures>
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


