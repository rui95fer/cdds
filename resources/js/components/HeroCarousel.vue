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
    <div class="hero-container min-h-[500px] sm:min-h-[600px]">
        <Swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="0"
            :speed="800"
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
            :lazy="true"
            :preventInteractionOnTransition="true"
            class="h-full w-full"
        >
            <!-- Slide 1: Boas-vindas -->
            <SwiperSlide class="swiper-slide-fix">
                <section
                    class="safari-stacking relative isolate flex h-full items-center justify-center overflow-hidden bg-cover bg-center bg-no-repeat sm:justify-start"
                    aria-label="Bem-vindos ao Colégio Dom Diogo de Sousa"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="animate-zoom absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
                        :style="{ backgroundImage: 'url(/slide1.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 z-[1] bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-[2] mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-xl leading-tight font-bold sm:mb-6 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl"
                            >
                                Bem-vindos ao<br />
                                <span class="mt-1 block text-[#E8BA02]"
                                    >Colégio Dom Diogo de Sousa</span
                                >
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-sm leading-relaxed text-gray-100 sm:mb-8 sm:text-base md:text-lg lg:text-xl"
                            >
                                Uma instituição de referência que molda o futuro
                                dos nossos alunos com excelência e dedicação há
                                mais de 50 anos.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-sm font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-base"
                                    aria-label="Descubra mais sobre o colégio"
                                >
                                    Descubra Mais
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-sm font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-base"
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
            <SwiperSlide class="swiper-slide-fix">
                <section
                    class="safari-stacking relative isolate flex h-full items-center justify-center overflow-hidden bg-cover bg-center bg-no-repeat sm:justify-start"
                    aria-label="Excelência Académica"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="animate-zoom absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
                        :style="{ backgroundImage: 'url(/slide2.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 z-[1] bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-[2] mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-xl leading-tight font-bold sm:mb-6 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl"
                            >
                                <span class="block text-[#E8BA02]"
                                    >Excelência</span
                                >
                                Académica
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-sm leading-relaxed text-gray-100 sm:mb-8 sm:text-base md:text-lg lg:text-xl"
                            >
                                Oferecemos um ensino de qualidade superior com
                                metodologias inovadoras que preparam os nossos
                                alunos para os desafios do futuro.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-sm font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-base"
                                    aria-label="Conheça o nosso ensino"
                                >
                                    Conheça o Nosso Ensino
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-sm font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-base"
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
            <SwiperSlide class="swiper-slide-fix">
                <section
                    class="safari-stacking relative isolate flex h-full items-center justify-center overflow-hidden bg-cover bg-center bg-no-repeat sm:justify-start"
                    aria-label="Uma Comunidade Vibrante"
                >
                    <!-- Background Image with Zoom Animation -->
                    <div
                        class="animate-zoom absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
                        :style="{ backgroundImage: 'url(/slide3.webp)' }"
                        aria-hidden="true"
                    ></div>
                    <!-- Gradient Overlay -->
                    <div
                        class="absolute inset-0 z-[1] bg-gradient-to-r from-black/85 via-black/65 to-black/20"
                        aria-hidden="true"
                    ></div>
                    <!-- Content Container -->
                    <div
                        class="relative z-[2] mx-auto -mt-8 w-full max-w-7xl px-4 sm:-mt-12 sm:px-6 lg:px-8"
                    >
                        <!-- Content -->
                        <div
                            class="mx-auto flex max-w-xs flex-col items-center text-center text-white sm:mx-0 sm:max-w-lg sm:items-start sm:text-left md:max-w-xl lg:max-w-2xl"
                        >
                            <h1
                                class="mb-4 font-[Montserrat] text-xl leading-tight font-bold sm:mb-6 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl"
                            >
                                Uma Comunidade<br />
                                <span class="mt-1 block text-[#E8BA02]"
                                    >Vibrante</span
                                >
                            </h1>
                            <p
                                class="mb-6 max-w-prose font-[Montserrat] text-sm leading-relaxed text-gray-100 sm:mb-8 sm:text-base md:text-lg lg:text-xl"
                            >
                                Proporcionamos um ambiente acolhedor onde cada
                                aluno desenvolve não só conhecimentos, mas
                                também valores e amizades para toda a vida.
                            </p>
                            <div
                                class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row sm:gap-4"
                            >
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg bg-[#960A23] px-6 py-3 font-[Montserrat] text-sm font-semibold text-white transition-all duration-300 hover:scale-105 hover:bg-[#960A23]/90 hover:shadow-xl focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black focus:outline-none active:scale-100 sm:px-8 sm:py-4 sm:text-base"
                                    aria-label="Explore a vida escolar"
                                >
                                    Explore a Vida Escolar
                                    <ChevronRight
                                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1 sm:h-5 sm:w-5"
                                        aria-hidden="true"
                                    />
                                </button>
                                <button
                                    class="group inline-flex items-center justify-center gap-2 rounded-lg border-2 border-white/30 bg-white/10 px-6 py-3 font-[Montserrat] text-sm font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-white/50 hover:bg-white/20 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black focus:outline-none sm:px-8 sm:py-4 sm:text-base"
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
/* Swiper slide fix - prevents layout breaks during transitions */
.swiper-slide-fix {
    height: auto;
    display: flex;
    flex-direction: column;
}

.swiper-slide-fix section {
    flex: 1;
    min-height: 100%;
}

/* Simple zoom animation without any hardware acceleration tricks */
@keyframes zoomIn {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.15);
    }
}

.animate-zoom {
    animation: zoomIn 20s ease-in-out infinite alternate;
}

/* Backdrop blur */
.backdrop-blur-sm {
    backdrop-filter: blur(4px);
}

/* Container height */
.hero-container {
    height: 100vh;
    position: relative;
    overflow: hidden;
}

@supports (-webkit-touch-callout: none) {
    .hero-container {
        height: -webkit-fill-available;
    }
}
</style>
