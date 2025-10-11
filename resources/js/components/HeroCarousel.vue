<script setup lang="ts">
import { ChevronRight } from 'lucide-vue-next';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { Swiper, SwiperSlide } from 'swiper/vue';

const modules = [Autoplay, Pagination, Navigation];
</script>

<template>
    <div class="h-[calc(100vh-88px)] min-h-[500px] sm:min-h-[600px]">
        <Swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="0"
            :autoplay="{
                delay: 5000,
                disableOnInteraction: false,
            }"
            :pagination="{
                clickable: true,
                bulletClass: 'swiper-pagination-bullet !bg-white/50',
                bulletActiveClass:
                    'swiper-pagination-bullet-active !bg-[#e9bb01]',
            }"
            :navigation="false"
            :loop="true"
            class="h-full w-full"
        >
            <!-- Slide 1: Boas-vindas -->
            <SwiperSlide>
                <div
                    class="relative flex h-full items-center justify-center sm:justify-start bg-cover bg-center bg-no-repeat"
                    :style="{ backgroundImage: 'url(/cdds.jpg)' }"
                >
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"
                    ></div>
                    <!-- Content Container -->
                    <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 -mt-8 sm:-mt-12">
                        <!-- Content -->
                        <div
                            class="flex max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-2xl flex-col items-center sm:items-start text-center sm:text-left text-white mx-auto sm:mx-0"
                        >
                            <h1
                                class="mb-4 sm:mb-6 font-[Montserrat] text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight font-bold"
                            >
                                Bem-vindos ao<br />
                                <span class="text-[#e9bb01]"
                                    >Colégio Dom Diogo de Sousa</span
                                >
                            </h1>
                            <p
                                class="mb-6 sm:mb-8 font-[Montserrat] text-base sm:text-lg md:text-xl leading-relaxed"
                            >
                                Uma instituição de referência que molda o futuro dos
                                nossos alunos com excelência e dedicação.
                            </p>
                            <button
                                class="group inline-flex items-center gap-2 rounded-md bg-[#890c25] px-6 sm:px-8 py-3 sm:py-4 font-[Montserrat] text-base sm:text-lg font-semibold text-white transition-all hover:bg-[#a00710] hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2"
                            >
                                Descubra Mais
                                <ChevronRight
                                    class="h-4 w-4 sm:h-5 sm:w-5 transition-transform group-hover:translate-x-1"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </SwiperSlide>

            <!-- Slide 2: Excelência Académica -->
            <SwiperSlide>
                <div
                    class="relative flex h-full items-center justify-center sm:justify-start bg-cover bg-center bg-no-repeat"
                    :style="{ backgroundImage: 'url(/cdds.jpg)' }"
                >
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"
                    ></div>
                    <!-- Content Container -->
                    <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 -mt-8 sm:-mt-12">
                        <!-- Content -->
                        <div
                            class="flex max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-2xl flex-col items-center sm:items-start text-center sm:text-left text-white mx-auto sm:mx-0"
                        >
                            <h1
                                class="mb-4 sm:mb-6 font-[Montserrat] text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight font-bold"
                            >
                                <span class="text-[#e9bb01]">Excelência</span><br />
                                Académica
                            </h1>
                            <p
                                class="mb-6 sm:mb-8 font-[Montserrat] text-base sm:text-lg md:text-xl leading-relaxed"
                            >
                                Oferecemos um ensino de qualidade superior com metodologias
                                inovadoras que preparam os nossos alunos para os desafios do futuro.
                            </p>
                            <button
                                class="group inline-flex items-center gap-2 rounded-md bg-[#890c25] px-6 sm:px-8 py-3 sm:py-4 font-[Montserrat] text-base sm:text-lg font-semibold text-white transition-all hover:bg-[#a00710] hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2"
                            >
                                Conheça o Nosso Ensino
                                <ChevronRight
                                    class="h-4 w-4 sm:h-5 sm:w-5 transition-transform group-hover:translate-x-1"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </SwiperSlide>

            <!-- Slide 3: Vida Escolar -->
            <SwiperSlide>
                <div
                    class="relative flex h-full items-center justify-center sm:justify-start bg-cover bg-center bg-no-repeat"
                    :style="{ backgroundImage: 'url(/cdds.jpg)' }"
                >
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-transparent"
                    ></div>
                    <!-- Content Container -->
                    <div class="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 -mt-8 sm:-mt-12">
                        <!-- Content -->
                        <div
                            class="flex max-w-xs sm:max-w-lg md:max-w-xl lg:max-w-2xl flex-col items-center sm:items-start text-center sm:text-left text-white mx-auto sm:mx-0"
                        >
                            <h1
                                class="mb-4 sm:mb-6 font-[Montserrat] text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight font-bold"
                            >
                                Uma Comunidade<br />
                                <span class="text-[#e9bb01]">Vibrante</span>
                            </h1>
                            <p
                                class="mb-6 sm:mb-8 font-[Montserrat] text-base sm:text-lg md:text-xl leading-relaxed"
                            >
                                Proporcionamos um ambiente acolhedor onde cada aluno
                                desenvolve não só conhecimentos, mas também valores e amizades para toda a vida.
                            </p>
                            <button
                                class="group inline-flex items-center gap-2 rounded-md bg-[#890c25] px-6 sm:px-8 py-3 sm:py-4 font-[Montserrat] text-base sm:text-lg font-semibold text-white transition-all hover:bg-[#a00710] hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2"
                            >
                                Explore a Vida Escolar
                                <ChevronRight
                                    class="h-4 w-4 sm:h-5 sm:w-5 transition-transform group-hover:translate-x-1"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </SwiperSlide>
        </Swiper>
    </div>
</template>

<style scoped>
/* Custom Swiper styles */
:deep(.swiper-pagination) {
    bottom: 1rem !important;
}

@media (min-width: 640px) {
    :deep(.swiper-pagination) {
        bottom: 2rem !important;
    }
}

:deep(.swiper-pagination-bullet) {
    width: 10px !important;
    height: 10px !important;
    margin: 0 4px !important;
    transition: all 0.3s ease !important;
}

@media (min-width: 640px) {
    :deep(.swiper-pagination-bullet) {
        width: 12px !important;
        height: 12px !important;
        margin: 0 6px !important;
    }
}

:deep(.swiper-pagination-bullet-active) {
    transform: scale(1.2) !important;
}

:deep(.swiper-button-next),
:deep(.swiper-button-prev) {
    color: white !important;
    background: rgba(255, 255, 255, 0.1) !important;
    border-radius: 50% !important;
    width: 40px !important;
    height: 40px !important;
    margin-top: -20px !important;
    transition: all 0.3s ease !important;
}

@media (min-width: 768px) {
    :deep(.swiper-button-next),
    :deep(.swiper-button-prev) {
        width: 50px !important;
        height: 50px !important;
        margin-top: -25px !important;
    }
}

:deep(.swiper-button-next::after),
:deep(.swiper-button-prev::after) {
    font-size: 16px !important;
    font-weight: bold !important;
}

@media (min-width: 768px) {
    :deep(.swiper-button-next::after),
    :deep(.swiper-button-prev::after) {
        font-size: 20px !important;
    }
}

:deep(.swiper-button-next:hover),
:deep(.swiper-button-prev:hover) {
    background: rgba(233, 187, 1, 0.9) !important;
    transform: scale(1.1) !important;
}

/* Touch-friendly spacing on mobile */
@media (max-width: 639px) {
    :deep(.swiper-button-next) {
        right: 0.5rem !important;
    }

    :deep(.swiper-button-prev) {
        left: 0.5rem !important;
    }
}
</style>
