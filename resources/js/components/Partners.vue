<script setup lang="ts">
import { onMounted, ref } from 'vue';

const carouselRef = ref<HTMLElement>();
const prefersReducedMotion = ref(false);

// Partner logos data - using the available partner-1.webp for testing
const partners = [
    { name: 'Parceiro 4', logo: '/4.webp' },
    { name: 'Parceiro 5', logo: '/5.webp' },
    { name: 'Parceiro 6', logo: '/6.webp' },
    { name: 'Parceiro 7', logo: '/7.webp' },
    { name: 'Parceiro 8', logo: '/8.webp' },
    { name: 'Parceiro 9', logo: '/9.webp' },
    { name: 'Parceiro 10', logo: '/10.webp' },
    { name: 'Parceiro 11', logo: '/11.webp' },
    { name: 'Parceiro 12', logo: '/12.webp' },
    { name: 'Parceiro 13', logo: '/13.webp' },
    { name: 'Parceiro 24', logo: '/24.webp' },
    { name: 'Parceiro 25', logo: '/25.webp' },
    { name: 'Parceiro 26', logo: '/26.webp' },
    { name: 'Parceiro 27', logo: '/27.webp' },
    { name: 'Parceiro 28', logo: '/28.webp' },
    { name: 'Parceiro 29', logo: '/29.webp' },

];

// Double the partners array for seamless looping
const doubledPartners = [...partners, ...partners];

onMounted(() => {
    // Check for reduced motion preference
    prefersReducedMotion.value = window.matchMedia(
        '(prefers-reduced-motion: reduce)',
    ).matches;
});
</script>

<template>
    <section
        class="overflow-hidden bg-white py-16"
        aria-labelledby="partners-heading"
    >
        <div class="container mx-auto px-4">
            <h2 id="partners-heading" class="sr-only">
                Parceiros de Confiança do Colégio Dom Diogo de Sousa
            </h2>

            <div class="relative">
                <div class="overflow-hidden">
                    <div
                        ref="carouselRef"
                        class="flex items-center gap-12 md:gap-16 lg:gap-20"
                        :class="{
                            'animate-scroll': !prefersReducedMotion,
                        }"
                        role="img"
                        aria-label="Logótipos dos parceiros do colégio em movimento contínuo"
                    >
                        <div
                            v-for="(partner, index) in doubledPartners"
                            :key="`${partner.name}-${index}`"
                            class="flex-shrink-0 transition-all duration-300"
                        >
                            <img
                                :src="partner.logo"
                                :alt="`Logótipo do ${partner.name}`"
                                class="h-12 md:h-16 lg:h-20 w-auto object-contain grayscale filter transition-all duration-300"
                                loading="lazy"
                            />
                        </div>
                    </div>
                </div>

                <!-- Gradient overlays for smooth fade effect -->
                <div
                    class="pointer-events-none absolute top-0 bottom-0 left-0 w-16 bg-gradient-to-r from-white to-transparent"
                ></div>
                <div
                    class="pointer-events-none absolute top-0 right-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent"
                ></div>
            </div>
        </div>
    </section>
</template>

<style scoped>
@keyframes scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-scroll {
    animation: scroll 25s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
    .animate-scroll {
        animation: none;
    }
}

/* Focus styles for better accessibility */
img:focus {
    outline: 2px solid #0b2c70;
    outline-offset: 4px;
    border-radius: 4px;
}
</style>
