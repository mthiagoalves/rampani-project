<template>
    <swiper :modules="modules" :slides-per-view="1" effect="fade" :space-between="8" navigation :pagination="{ clickable: true }"
        @swiper="onSwiper" @slideChange="onSlideChange">
        <swiper-slide>
            <img src="https://dummyimage.com/1800x600/bd7daf/fff" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="https://dummyimage.com/1800x600/bd7f9e/fff" alt="">
        </swiper-slide>
        <swiper-slide>
            <img src="https://dummyimage.com/1800x600/d45594/fff" alt="">
        </swiper-slide>
    </swiper>
</template>

<script>
// import Swiper core and required modules
import { Navigation, Pagination, A11y, EffectFade } from 'swiper/modules';

import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

// Import Swiper styles
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
            modules: [Navigation, Pagination, A11y, EffectFade],
        };
    },
};
</script>
