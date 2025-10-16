<script setup lang="ts">
import { ref, onMounted } from 'vue'

const carouselRef = ref<HTMLElement>()
const prefersReducedMotion = ref(false)

// Partner logos data - using the available partner-1.webp for testing
const partners = [
  { name: 'Parceiro 1', logo: '/partner-1.webp' },
  { name: 'Parceiro 2', logo: '/partner-1.webp' },
  { name: 'Parceiro 3', logo: '/partner-1.webp' },
  { name: 'Parceiro 4', logo: '/partner-1.webp' },
  { name: 'Parceiro 5', logo: '/partner-1.webp' },
  { name: 'Parceiro 6', logo: '/partner-1.webp' },
  { name: 'Parceiro 7', logo: '/partner-1.webp' },
  { name: 'Parceiro 8', logo: '/partner-1.webp' },
  { name: 'Parceiro 9', logo: '/partner-1.webp' },
  { name: 'Parceiro 10', logo: '/partner-1.webp' },
]

// Double the partners array for seamless looping
const doubledPartners = [...partners, ...partners]

onMounted(() => {
  // Check for reduced motion preference
  prefersReducedMotion.value = window.matchMedia('(prefers-reduced-motion: reduce)').matches
})
</script>

<template>
  <section class="py-16 bg-white overflow-hidden" aria-labelledby="partners-heading">
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
              'animate-scroll': !prefersReducedMotion
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
                class="h-8 md:h-10 lg:h-12 w-auto object-contain filter grayscale opacity-60 hover:opacity-80 transition-all duration-300"
                loading="lazy"
              />
            </div>
          </div>
        </div>

        <!-- Gradient overlays for smooth fade effect -->
        <div class="absolute left-0 top-0 bottom-0 w-16 bg-gradient-to-r from-white to-transparent pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-16 bg-gradient-to-l from-white to-transparent pointer-events-none"></div>
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
  animation: scroll 40s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .animate-scroll {
    animation: none;
  }
}

/* Focus styles for better accessibility */
img:focus {
  outline: 2px solid #0B2C70;
  outline-offset: 4px;
  border-radius: 4px;
}
</style>
