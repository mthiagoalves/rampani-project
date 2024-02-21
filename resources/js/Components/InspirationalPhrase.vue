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

    <div class="container mx-auto mt-6 mb-6">
        <div class="flex justify-center">
            <div class="w-4/12">
                <div class="card-equip">
                    <img src="/imgs/icons/team.png" alt="" class="img-card">
                    <h3>
                        Equipe Multidisciplinar
                    </h3>
                    <p>Confie sua beleza aos especialistas. Nossa equipe é composta por profissionais apaixonados e especializados em diversas disciplinas. Dermatologistas, esteticistas, fisioterapeutas e mais se unem para criar abordagens personalizadas, garantindo que cada cliente receba atenção especializada, moldando resultados únicos e impressionantes.</p>
                </div>
            </div>
            <div class="w-4/12">
                <div class="card-equip">
                    <img src="/imgs/icons/equip.png" alt="" class="img-card">
                    <h3>
                        Aparelhos de Última Geração
                    </h3>
                    <p>Na vanguarda da inovação, investimos nos mais avançados aparelhos disponíveis. Da mais recente tecnologia em tratamentos faciais aos procedimentos corporais mais modernos, nossos equipamentos de última geração asseguram resultados eficazes e confortáveis. Na Clínica Rampani, não seguimos tendências; criamos-as.</p>
                </div>
            </div>
            <div class="w-4/12">
                <div class="card-equip">
                    <img src="/imgs/icons/soft-client.png" alt="" class="img-card">
                    <h3>
                        Atendimento Único e Sofisticado
                    </h3>
                    <p>Cada cliente é uma obra-prima única, e tratamos assim desde o primeiro contato. Nosso atendimento vai além do profissionalismo, envolvendo-o em uma experiência acolhedora e sofisticada. Na Clínica Rampani, não apenas transformamos a sua aparência; elevamos sua jornada estética a um nível de serviço que você merece.</p>
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


.card-equip{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 3rem 2rem;
    margin: 10px;
    border-radius: 25px 0;
    backdrop-filter: blur(3px) saturate(180%);
    -webkit-backdrop-filter: blur(3px) saturate(180%);
    background-color: rgba(228, 162, 163, 0.47);
    border: 1px solid rgba(255, 255, 255, 0.125);
    -webkit-box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
    box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
}

.card-equip h3{
    font-size: 1.2rem;
    font-weight: 600;
    margin-top: 1rem;
    color: var(--color-text-standard-hover);
    text-align: center;
}

.card-equip p{
    margin-top: 1rem;
    color: var(--color-text-standard-hover);
    text-align: center;
    min-height: 200px;
}

.img-card {
    max-width: 150px;
}
</style>
