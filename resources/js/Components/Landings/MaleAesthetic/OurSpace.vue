<script>
import FsLightbox from "fslightbox-vue/v3";

export default {
    components: { FsLightbox },
    data() {
        return {
            toggler: false,
            slide: 1,
        };
    },
    methods: {
        openLightboxOnSlide: function (number) {
            this.slide = number;
            this.toggler = !this.toggler;
        },
    },
};
</script>
<template>
    <FsLightbox :toggler="toggler" :slide="slide" :sources="[
        '/imgs/landings/male-aesthetic/zoom/1.jpg',
        '/imgs/landings/male-aesthetic/zoom/2.jpg',
        '/imgs/landings/male-aesthetic/zoom/3.jpg',
        '/imgs/landings/male-aesthetic/zoom/4.jpg',
        '/imgs/landings/male-aesthetic/zoom/5.jpg',
        '/imgs/landings/male-aesthetic/zoom/6.jpg',
    ]" />
    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-0 text-center">
        <h1 class="text-3xl lg:text-3xl title-section mb-6">
            Nosso Espaço
        </h1>
        <div class="flex flex-wrap md:-m-2">
            <div class="flex lg:w-1/2 flex-wrap">
                <div class="w-1/2 p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/3.jpg" @click="openLightboxOnSlide(3)"/>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/4.jpg" @click="openLightboxOnSlide(4)"/>
                </div>
                <div class="w-full p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/1.jpg" @click="openLightboxOnSlide(1)"/>
                </div>
            </div>
            <div class="flex lg:w-1/2 flex-wrap">
                <div class="w-full p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/2.jpg" @click="openLightboxOnSlide(2)"/>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/5.jpg" @click="openLightboxOnSlide(5)"/>
                </div>
                <div class="w-1/2 p-1 md:p-2">
                    <img class="block h-full w-full rounded-lg object-cover object-center cursor-pointer"
                        src="/imgs/landings/male-aesthetic/6.jpg" @click="openLightboxOnSlide(6)"/>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.title-section {
    font-weight: 600;
    color: #121212;
    text-transform: uppercase;
}
</style>
