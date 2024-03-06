<template>
    <div class="container mx-auto mt-20 mb-32">
        <swiper :modules="modules" :slides-per-view="slidesPerView"
            :pagination="{ clickable: true, dynamicBullets: true }" :loop="true" :loop-additional-slides="6"
            centeredSlides @swiper="onSwiper" @slideChange="onSlideChange"
            :autoplay="{ delay: 3000, disableOnInteraction: false }" class="swiper-comments-google">
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/marcela-pereira.png">
                            <div class="flex-col">
                                <h3>Marcela Pereira Lopes</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/fSM54zR" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Gente, a clínica é incrível, o atendimento…eu fui indicada por amiga que é cliente a anos. Tem
                        de
                        tudo lá, eu fiz um procedimento que chama lavieen, na primeira sessão minha pele já deu um glow
                        up,
                        surreal 🫶
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/pamela-oliveira.png">
                            <div class="flex-col">
                                <h3>Pamela Oliveira</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/yNNkUbQ" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Melhor clínica de São Paulo! Estética completa em um só lugar, as profissionais do espaço prezam
                        integralmente por nosso bem-estar, alta tecnologia com diversos aparelhos que compõem os
                        tratamentos
                        personalizados. Eu amo e indico de olhos fechados o espaço e toda equipe da Dra. Juliana
                        Rampani,
                        excelência define!
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/nayara-clarindo.png">
                            <div class="flex-col">
                                <h3>Nayara Clarindo</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/fDXESq9" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Mais uma vez me atendeu super bem, recepcionistas e doutoras estão todos de parabéns! 🥰🥰
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/marcela-pereira.png">
                            <div class="flex-col">
                                <h3>Beatriz Figueiredo</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/uiLiLW8" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Clínica maravilhosa com atendimento excelente! Ju Rampani é uma querida e profissional incrível,
                        tive uma ótima experiência e amei cada segundo!
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/lucas-guerra.png">
                            <div class="flex-col">
                                <h3>Lucas Guerra</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/tj2gcTe" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Lugar maravilhoso, desde o atendimento até o procedimento final, estão de parabéns 😃
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/daniele-olivera.png">
                            <div class="flex-col">
                                <h3>Daniele Oliveira</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/mdbTBZp" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Clínica maravilhosa, moderna e aconchegante. Atendimento impecável!
                    </div>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="card-google flex-col">
                    <div class="flex justify-between flex-start">
                        <div class="div-client flex items-start">
                            <img src="/imgs/clients/larissa-alves.png">
                            <div class="flex-col">
                                <h3>Larissa Alves</h3>
                                <div class="flex items-center">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                    <img src="/imgs/icons/star.png" class="icon-star">
                                </div>
                            </div>
                        </div>
                        <a href="https://g.co/kgs/3ZbvEfq" class="google-icon" target="_blank">
                            <img src="/imgs/icons/google.png">
                        </a>
                    </div>
                    <div class="depoimment mt-4 text-start leading-none">
                        Uma experiência incrivel, pessoas recptivas e simpaticas. Voltarei em breve!

                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>

<style>
.card-google {
    margin: 10px;
    padding: 1rem 1rem;
    border-radius: 25px 0;
    backdrop-filter: blur(3px) saturate(180%);
    -webkit-backdrop-filter: blur(3px) saturate(180%);
    background-color: #eedede78;
    border: 1px solid #ffffff20;
    -webkit-box-shadow: 7px 7px 14px -11px #000000bf;
    -moz-box-shadow: 7px 7px 14px -11px #000000bf;
    box-shadow: 7px 7px 14px -11px #000000bf;
    transition: var(--transition-standard);
}

.card-google h3 {
    font-size: .6rem;
}

.card-google img {
    max-width: 40px;
}

.card-google .google-icon img {
    max-width: 20px;
}

.div-client img {
    margin-right: 10px;
}

.card-google .icon-star {
    max-width: 10px;
    margin: 0;
}

.depoimment {
    font-size: .6rem;
}

@media(min-width: 756px) {
    .depoimment {
        height: 90px;
    }
}

.swiper-button-prev,
.swiper-button-next {
    color: var(--color-standard);
}

.swiper-pagination-bullet-active {
    background-color: var(--color-standard);
}

.swiper {
    width: 100%;
    margin: 40px 0;
    padding: 45px 0;
}

.swiper-slide {
    opacity: 0.4;
    overflow: hidden;
    transition: .7s;
}

.swiper-slide.swiper-slide-active {
    opacity: 1;
    z-index: 1;
    transform: scale(1.5);
}

@media(max-width: 756px) {

    .card-google {
        width: 60%;
        margin: 15px auto;
    }

    .card-google img {
        max-width: 40x;
    }

    .card-google .google-icon img {
        max-width: 30px;
    }

    .card-google .icon-star {
        max-width: 12px;
        margin: 0;
    }

    .div-client {
        margin-right: 40px;
    }

    .div-client h3 {
        text-align: start;
        font-size: .6rem;
    }
}
</style>

<script>
import { A11y, Autoplay } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };

        const onSlideChange = () => {
            console.log('slide change');
        };

        const slidesPerView = window.innerWidth >= 768 ? 5.75 : 1;

        return {
            onSwiper,
            onSlideChange,
            modules: [A11y, Autoplay],
            slidesPerView,
        };
    },
};
</script>
