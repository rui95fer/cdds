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
    <div class="h-screen min-h-[500px] sm:min-h-[600px]">
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
                    'swiper-pagination-bullet-active !bg-[#E8BA02]',
            }"
            :navigation="false"
            :loop="true"
            class="h-full w-full"
        >
            <!-- Slide 1: Boas-vindas -->
            <SwiperSlide>
                <section
                    class="relative flex h-full items-center justify-center bg-cover bg-center bg-no-repeat sm:justify-start overflow-hidden"
                    aria-label="Bem-vindos ao Colégio Dom Diogo de Sousa"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-zoom"
                        :style="{ backgroundImage: 'url(/slide1.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-10 mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-2xl leading-tight font-bold sm:mb-6 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
                            >
                                Bem-vindos ao<br />
                                <span class="mt-1 block text-[#E8BA02]"
                                    >Colégio Dom Diogo de Sousa</span
                                >
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-base leading-relaxed text-gray-100 sm:mb-8 sm:text-lg md:text-xl lg:text-2xl"
                            >
                                Uma instituição de referência que molda o futuro
                                dos nossos alunos com excelência e dedicação há
                                mais de 50 anos.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-base font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Descubra mais sobre o colégio"
                                >
                                    Descubra Mais
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-base font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Ver vídeo de apresentação"
                                >
                                    Ver Vídeo
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </SwiperSlide>

            <!-- Slide 2: Excelência Académica -->
            <SwiperSlide>
                <section
                    class="relative flex h-full items-center justify-center bg-cover bg-center bg-no-repeat sm:justify-start overflow-hidden"
                    aria-label="Excelência Académica"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-zoom"
                        :style="{ backgroundImage: 'url(/slide2.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-10 mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-2xl leading-tight font-bold sm:mb-6 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
                            >
                                <span class="block text-[#E8BA02]"
                                    >Excelência</span
                                >
                                Académica
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-base leading-relaxed text-gray-100 sm:mb-8 sm:text-lg md:text-xl lg:text-2xl"
                            >
                                Oferecemos um ensino de qualidade superior com
                                metodologias inovadoras que preparam os nossos
                                alunos para os desafios do futuro.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-base font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Conheça o nosso ensino"
                                >
                                    Conheça o Nosso Ensino
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-base font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Ver cursos disponíveis"
                                >
                                    Ver Cursos
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </SwiperSlide>

            <!-- Slide 3: Vida Escolar -->
            <SwiperSlide>
                <section
                    class="relative flex h-full items-center justify-center bg-cover bg-center bg-no-repeat sm:justify-start overflow-hidden"
                    aria-label="Uma Comunidade Vibrante"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="absolute inset-0 bg-cover bg-center bg-no-repeat animate-zoom"
                        :style="{ backgroundImage: 'url(/slide3.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-10 mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-2xl leading-tight font-bold sm:mb-6 sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
                            >
                                Uma Comunidade<br />
                                <span class="mt-1 block text-[#E8BA02]"
                                    >Vibrante</span
                                >
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-base leading-relaxed text-gray-100 sm:mb-8 sm:text-lg md:text-xl lg:text-2xl"
                            >
                                Proporcionamos um ambiente acolhedor onde cada
                                aluno desenvolve não só conhecimentos, mas
                                também valores e amizades para toda a vida.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-base font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Explore a vida escolar"
                                >
                                    Explore a Vida Escolar
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-base font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-lg"
                                    aria-label="Ver actividades extracurriculares"
                                >
                                    Ver Actividades
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
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
    background: rgba(232, 186, 2, 0.9) !important;
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

/* Animation keyframes */
@keyframes zoomIn {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.25);
    }
}

/* Animation class */
.animate-zoom {
    animation: zoomIn 20s ease-in-out infinite alternate;
}
</style>
