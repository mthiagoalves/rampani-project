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
    <div class="grid grid-cols-2 md:grid-cols-4 gap-1">
        <FsLightbox :toggler="toggler" :slide="slide" :sources="[
            '/imgs/clinic/zoom/1.jpg',
            '/imgs/clinic/zoom/2.jpg',
            '/imgs/clinic/zoom/3.jpg',
            '/imgs/clinic/zoom/4.jpg',
            '/imgs/clinic/zoom/5.jpg',
            '/imgs/clinic/zoom/6.jpg',
            '/imgs/clinic/zoom/7.jpg',
            '/imgs/clinic/zoom/8.jpg',
            '/imgs/clinic/zoom/9.jpg',
            '/imgs/clinic/zoom/10.jpg',
            '/imgs/clinic/zoom/11.jpg',
            '/imgs/clinic/zoom/12.jpg',
        ]" />
        <div class="grid gap-1">
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/1.jpg" alt="" @click="openLightboxOnSlide(1)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/5.jpg" alt="" @click="openLightboxOnSlide(5)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/9.jpg" alt="" @click="openLightboxOnSlide(9)">
            </div>
        </div>
        <div class="grid gap-1">
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/2.jpg" alt="" @click="openLightboxOnSlide(2)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/6.jpg" alt="" @click="openLightboxOnSlide(6)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/10.jpg" alt="" @click="openLightboxOnSlide(10)">
            </div>
        </div>
        <div class="grid gap-1">
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/3.jpg" alt="" @click="openLightboxOnSlide(3)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/7.jpg" alt="" @click="openLightboxOnSlide(7)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/11.jpg" alt="" @click="openLightboxOnSlide(11)">
            </div>
        </div>
        <div class="grid gap-1">
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/4.jpg" alt="" @click="openLightboxOnSlide(4)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/8.jpg" alt="" @click="openLightboxOnSlide(8)">
            </div>
            <div>
                <img class="h-auto max-w-full cursor-pointer" src="/imgs/clinic/12.jpg" alt="" @click="openLightboxOnSlide(12)">
            </div>
        </div>
    </div>
</template>
