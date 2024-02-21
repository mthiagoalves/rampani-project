<template>
    <swiper :modules="modules" :slides-per-view="1" :space-between="8" navigation
        :pagination="{ clickable: true, dynamicBullets: true }" :loop="true" :loop-additional-slides="6" @swiper="onSwiper"
        @slideChange="onSlideChange" :autoplay="{ delay: 2500, disableOnInteraction: false }">
        <swiper-slide>
            <img src="/imgs/banners/banner-01.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-01-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
        <swiper-slide>
            <img src="/imgs/banners/banner-02.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-02-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
        <swiper-slide>
            <img src="/imgs/banners/banner-03.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-03-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
        <swiper-slide>
            <img src="/imgs/banners/banner-04.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-04-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
        <swiper-slide>
            <img src="/imgs/banners/banner-05.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-05-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
        <swiper-slide>
            <img src="/imgs/banners/banner-06.png" alt="" class="hidden sm:block">
            <img src="/imgs/banners/banner-06-m.png" alt="" class="block sm:hidden">
        </swiper-slide>
    </swiper>
</template>

<style>
.swiper-button-prev,
.swiper-button-next {
    color: var(--color-standard);
}

.swiper-pagination-bullet-active {
    background-color: var(--color-standard);
}
</style>

<script>
import { Navigation, Pagination, A11y, Autoplay } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

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

        return {
            onSwiper,
            onSlideChange,
            modules: [Navigation, Pagination, A11y, Autoplay],
        };
    },
};
</script>
