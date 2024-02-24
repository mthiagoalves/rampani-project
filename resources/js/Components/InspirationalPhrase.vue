<template>
    <div class="container m-auto">
        <div class="inspirational-phrase">
            <h1>“O grande sucesso é o conjunto de várias pequenas ações realizadas no dia a dia.”</h1>
            <p>- Dra. Juliana Rampani</p>
            <a href="https://clinicarampani.com.br/juliana-rampani/" target="_blank" class="btn-rose">
                Conheça a Dra. Juliana
            </a>
        </div>
    </div>

    <div class="flex items-center w-screen first-section">
        <div class="container ml-auto mr-auto flex flex-wrap items-start justify-center">
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-4 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/team.png" alt="" class="h-40 ml-auto mr-auto img-card" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div class="h-64">
                            <h5 class="text-card font-bold leading-none mb-4">
                                Equipe Multidisciplinar
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Confie sua beleza aos especialistas. Nossa
                                equipe é composta por profissionais apaixonados e especializados em diversas disciplinas.
                                Dermatologistas, esteticistas, fisioterapeutas e mais se unem para criar abordagens
                                personalizadas, garantindo que cada cliente receba atenção especializada, moldando
                                resultados únicos e impressionantes.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-4 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/equip.png" alt="" class="h-40 ml-auto mr-auto img-card" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div class="h-64">
                            <h5 class="text-card font-bold leading-none mb-4">
                                Aparelhos de Última Geração
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Na vanguarda da inovação, investimos nos mais
                                avançados aparelhos disponíveis. Da mais recente tecnologia em tratamentos faciais aos
                                procedimentos corporais mais modernos, nossos equipamentos de última geração asseguram
                                resultados eficazes e confortáveis. Na Clínica Rampani, não seguimos tendências;
                                criamos-as.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
                <div
                    class="bg-white rounded-lg m-h-64 p-4 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                    <figure class="mb-2">
                        <img src="/imgs/icons/soft-client.png" alt="" class="h-40 ml-auto mr-auto img-card" />
                    </figure>
                    <div class="rounded-lg p-4 flex flex-col bg-clean-rose">
                        <div class="h-64">
                            <h5 class="text-card font-bold leading-none mb-4">
                                Atendimento Único e Sofisticado
                            </h5>
                            <span class="text-xs text-gray-400 leading-none">Cada cliente é uma obra-prima única, e tratamos
                                assim desde o primeiro contato. Nosso atendimento vai além do profissionalismo, envolvendo-o
                                em uma experiência acolhedora e sofisticada. Na Clínica Rampani, não apenas transformamos a
                                sua aparência; elevamos sua jornada estética a um nível de serviço que você merece.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style>
.inspirational-phrase {
    padding: 3rem;
    text-align: center;
}

.inspirational-phrase h1 {
    font-size: 4rem;
    color: var(--color-standard);
    line-height: 1;

}

.inspirational-phrase p {
    margin-bottom: 2rem;
    text-align: end;
    font-size: 2rem;
    color: var(--color-standard);
}

.img-card {
    max-width: 150px;
    filter: invert(.82);
}

@media(max-width: 756px) {
    .inspirational-phrase {
        padding: 1rem;
        text-align: center;
    }

    .inspirational-phrase h1 {
        font-size: 2rem;
    }
    .inspirational-phrase p {
    font-size: 1.3rem;
}
}</style>
