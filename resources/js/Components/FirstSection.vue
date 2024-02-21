<template>
    <div class="first-section">
        <h1>
            Principais Procedimentos
        </h1>
        <p>
            Os procedimentos menos invasivos do mercado, com a melhor tecnologia!
        </p>
        <div class="container mx-auto mt-4 mb-10">
            <div class="flex justify-center items-center">
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/laser.png" class="img-card" alt="">
                        <p>
                            Laser Lavieen
                        </p>
                    </div>
                </div>
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/seringa.png" class="img-card" alt="">
                        <p>
                            Bioestimulador de colágeno
                        </p>
                    </div>
                </div>
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/harmony.png" class="img-card" alt="">
                        <p>
                            Preenchimento cutâneo
                        </p>
                    </div>
                </div>
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/soroteraphy.png" class="img-card" alt="">
                        <p>
                            Soroterapia
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/ultherapy.png" class="img-card" alt="">
                        <p>
                            Ultherapy
                        </p>
                    </div>
                </div>
                <div class="w-1/4">
                    <div class="card">
                        <img src="/imgs/icons/botox.png" class="img-card" alt="">
                        <p>
                            Toxina Botulínica
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="btn-rose">Todos os procedimentos</a>

    </div>
</template>

<style scoped>
.first-section {
    min-height: 100vh;
    background-color: var(--color-white);
    padding: 5rem;
    text-align: center;
}

.mb-10{
    margin-bottom: 3rem;
}

.first-section h1 {
    font-size: 2rem;
    font-weight: 600;
    color: var(--color-standard);
}

.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 3rem 1rem;
    margin: 10px;
    border-radius: 25px 0;
    backdrop-filter: blur(3px) saturate(180%);
    -webkit-backdrop-filter: blur(3px) saturate(180%);
    background-color: rgba(228, 162, 163, 0.47);
    border: 1px solid rgba(255, 255, 255, 0.125);
    -webkit-box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
    box-shadow: 7px 7px 26px -11px rgba(0, 0, 0, 0.75);
    transition: var(--transition-standard);
}

.card:hover {
    transform: scale(1.02);
}
.card p{
    font-size: 1.35rem;
    margin-top: 1rem;
    color: var(--color-text-standard-hover);
}

.img-card {
    max-width: 150px;
}

</style>
