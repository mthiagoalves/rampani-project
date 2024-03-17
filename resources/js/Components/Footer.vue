<script setup>
import { computed } from 'vue';

const isLandingMaleAesthetic = computed(() => route().current('male-aesthetic'));
</script>

<template>
    <footer class="bg-white dark:bg-gray-900 pb-6">
        <div class="mx-auto w-full max-w-screen-xl" id="contact">
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-12" />
            <div class="md:flex md:justify-between mx-4 md:mx-auto">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <img src="/imgs/logo-rosa.png" class="img-logo" alt="Ramapani Logo"
                            v-if="!isLandingMaleAesthetic" />
                        <img src="/imgs/logo-red.png" class="img-logo" alt="Ramapani Logo"
                            v-if="isLandingMaleAesthetic" />
                    </a>
                </div>
                <div class="grid grid-cols-1 sm-grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contatos</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <p>Av. São Gualter, 499 – 1º andar <br>
                                    Alto de Pinheiros | São Paulo/SP</p>
                            </li>
                            <li>
                                <a href="tel:+551129257235" v-if="!isLandingMaleAesthetic"
                                    class="icons-socials-footer mb-4"><img src="/imgs/icons/phone.png" alt=""> Fone:
                                    (11) 2925-7235</a>
                                <a href="tel:+551129257235" v-if="isLandingMaleAesthetic"
                                    class="icons-socials-footer mb-4"><img src="/imgs/icons/phone-red.png" alt=""> Fone:
                                    (11) 2925-7235</a>
                            </li>
                            <li>
                                <a href="https://wa.me/5511941624610" v-if="!isLandingMaleAesthetic" target="_blank"
                                    class="icons-socials-footer mb-4"><img src="/imgs/icons/whatsapp.png" alt="">
                                    Whatsapp: (11) 94162-4610</a>
                                <a href="https://wa.me/5511941624610" v-if="isLandingMaleAesthetic" target="_blank"
                                    class="icons-socials-footer mb-4"><img src="/imgs/icons/whatsapp-red.png" alt="">
                                    Whatsapp: (11) 94162-4610</a>
                            </li>
                            <li>
                                <a href="mailto:contato@clinicarampani.com.br" v-if="!isLandingMaleAesthetic"
                                    class="icons-socials-footer mb-4" target="_blank"><img src="/imgs/icons/email.png"
                                        alt=""> Email: contato@clinicarampani.com.br</a>
                                <a href="mailto:contato@clinicarampani.com.br" v-if="isLandingMaleAesthetic"
                                    class="icons-socials-footer mb-4" target="_blank"><img
                                        src="/imgs/icons/email-red.png" alt=""> Email: contato@clinicarampani.com.br</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Horario de
                            funcionamento</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <p>Segunda a Sexta-feira - 10h às 19h <br> Sábados e Domingos -
                                    Fechado</p>
                            </li>

                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Informações</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a :href="route('privacy-policy')" class="hover:underline">Política de Privacidade</a>
                            </li>
                            <li>
                                <a :href="route('terms-and-conditions')" class="hover:underline">Termos e Condições</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between mx-4 md:mx-auto text-center">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a
                        :href="route('homepage')" class="hover:underline">Clinica Rampani</a>. All Rights
                    Reserved.
                </span>
                <div class="flex mt-4 justify-center sm:mt-0">
                    <a target="_blank" class="icons-socials" v-if="!isLandingMaleAesthetic" href="https://www.instagram.com/clinicarampani/">
                        <img src="/imgs/icons/instagram.png" alt="Icon Instagram">
                    </a>
                    <a target="_blank" class="icons-socials" v-if="isLandingMaleAesthetic" href="https://www.instagram.com/clinicarampani/">
                        <img src="/imgs/icons/instagram-red.png" alt="Icon Instagram">
                    </a>
                    <a target="_blank" class="icons-socials" v-if="!isLandingMaleAesthetic">
                        <img src="/imgs/icons/tiktok.png" alt="Icon Tiktok">
                    </a>
                    <a target="_blank" class="icons-socials" v-if="isLandingMaleAesthetic">
                        <img src="/imgs/icons/tiktok-red.png" alt="Icon Tiktok">
                    </a>
                    <a target="_blank" class="icons-socials" v-if="!isLandingMaleAesthetic" href="https://www.facebook.com/rampaniestetica">
                        <img src="/imgs/icons/facebook.png" alt="Icon Facebook">
                    </a>
                    <a target="_blank" class="icons-socials" v-if="isLandingMaleAesthetic" href="https://www.facebook.com/rampaniestetica">
                        <img src="/imgs/icons/facebook-red.png" alt="Icon Facebook">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</template>
