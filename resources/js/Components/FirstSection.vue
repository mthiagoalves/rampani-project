<template>
    <div class="flex items-center w-screen min-h-screen first-section">
        <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
            <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
                <h1 class="text-3xl lg:text-4xl title-section">
                    Principais Procedimentos
                </h1>
                <p>
                    Os procedimentos menos invasivos do mercado, com a melhor tecnologia!
                </p>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/laser.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Laser Lavieen
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Radiância em 40 Watts.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/seringa.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Bioestimulador de colágeno


                            </h5>
                            <span class="text-xs text-gray-400 leading-none">O poder do bioestimulador de colágeno.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/harmony.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Preenchimento cutâneo
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">A melhor harmonzação facial!</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/soroteraphy.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Soroterapia
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Vitalidade em Gotas.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/ultherapy.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Ultherapy
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Elevação Natural da pele.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div class="bg-white rounded-lg m-h-64 p-6 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/botox.png" alt="" class="h-40 ml-auto mr-auto img-card-methods" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div>
                            <h5 class="text-card font-bold leading-none">
                                Botox
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Expressões suaves e naturais.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
                <a :href="route('procedures')" class="btn-rose mb-10">
                    Todos os procedimentos
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
    font-size: 2rem;
    font-weight: 600;
    color: var(--color-standard);
}

.bg-clean-rose {
    background-color: #eedede78;
}

.text-card {
    font-size: 1rem;
    color: var(--color-text-standard-hover);
}

.img-card-methods {
    filter: invert(.25);
}
</style>
