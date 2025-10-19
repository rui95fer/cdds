<script setup lang="ts">
import { onMounted, ref } from 'vue';
import 'swiper/css';
import 'swiper/css/pagination';
import { Autoplay, Pagination } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';

const modules = [Autoplay, Pagination];
const prefersReducedMotion = ref(false);

const collegeImages = [
    { src: '/college/college.webp', alt: 'Vista do Colégio Dom Diogo de Sousa', title: 'Vista do Colégio' },
    { src: '/college/landscape.webp', alt: 'Paisagem do campus', title: 'Campus' },
    { src: '/college/hallway.webp', alt: 'Corredor do colégio', title: 'Corredor' },
    { src: '/college/classroom.webp', alt: 'Sala de aula', title: 'Sala de Aula' },
    { src: '/college/auditorium.webp', alt: 'Auditório', title: 'Auditório' },
    { src: '/college/clock.webp', alt: 'Relógio histórico do colégio', title: 'Relógio Histórico' },
];

onMounted(() => {
    // Check for reduced motion preference
    prefersReducedMotion.value = window.matchMedia(
        '(prefers-reduced-motion: reduce)',
    ).matches;
});
</script>

<template>
    <section
        class="bg-white py-20"
        aria-labelledby="college-heading"
    >
        <!-- Section Header - Centered with max-width -->
        <div class="max-w-7xl mx-auto px-4 mb-12 lg:mb-16">
            <!-- Section Label -->
            <div class="flex items-center gap-3 justify-center mb-6">
                <div class="w-8 h-0.5 bg-[#960A23]"></div>
                <span
                    class="text-[#960A23] font-semibold text-sm tracking-wide uppercase"
                >
                    O Colégio
                </span>
                <div class="w-8 h-0.5 bg-[#960A23]"></div>
            </div>
        </div>

        <!-- Carousel - Framed on Large Devices -->
        <div class="relative px-4 md:px-8 lg:px-8 xl:px-16">
            <Swiper
                :modules="modules"
                :slides-per-view="3"
                :space-between="24"
                :breakpoints="{
                    0: { slidesPerView: 1, spaceBetween: 16 },
                    640: { slidesPerView: 2, spaceBetween: 20 },
                    1024: { slidesPerView: 3, spaceBetween: 24 },
                    1280: { slidesPerView: 3.5, spaceBetween: 32 },
                    1536: { slidesPerView: 4, spaceBetween: 32 }
                }"
                :autoplay="prefersReducedMotion ? false : {
                    delay: 3500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                }"
                :loop="true"
                :grab-cursor="true"
                :centered-slides="false"
                class="w-full pb-12"
            >
                <SwiperSlide
                    v-for="(image, index) in collegeImages"
                    :key="index"
                >
                    <div
                        class="group relative h-[400px] md:h-[450px] lg:h-[500px] xl:h-[550px] overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:shadow-2xl"
                    >
                        <img
                            :src="image.src"
                            :alt="image.alt"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            loading="lazy"
                        />
                        <!-- Gradient overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 transition-opacity duration-300"
                            aria-hidden="true"
                        ></div>

                        <!-- Title overlay - appears on hover -->
                        <div
                            class="absolute bottom-0 left-0 right-0 p-6 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out"
                        >
                            <h3
                                class="text-white font-[Montserrat] font-semibold text-lg md:text-xl lg:text-2xl drop-shadow-lg"
                            >
                                {{ image.title }}
                            </h3>
                        </div>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
    </section>
</template>

<style scoped>
/* Custom pagination positioning and styling */
:deep(.swiper-pagination) {
    bottom: 0 !important;
}

:deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
    transition: all 0.3s ease;
    opacity: 1;
}

:deep(.swiper-pagination-bullet-active) {
    width: 28px;
    border-radius: 5px;
}

/* Ensure smooth transitions */
:deep(.swiper-slide) {
    transition: transform 0.3s ease;
}

/* Respect reduced motion preferences */
@media (prefers-reduced-motion: reduce) {
    .group-hover\:scale-105 {
        transform: none !important;
    }

    .transition-transform,
    .transition-opacity,
    .transition-all {
        transition-duration: 0.01ms !important;
    }
}
</style>
