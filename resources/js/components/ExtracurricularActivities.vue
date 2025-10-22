<script setup lang="ts">
import { ref } from 'vue'

const activities = [
  {
    id: 1,
    title: 'Academia 360',
    description: 'Desenvolvimento integral através de atividades multidisciplinares que potenciam o conhecimento e as competências dos alunos.',
  },
  {
    id: 3,
    title: 'Academia de Música',
    description: 'Ensino musical de excelência com instrução individualizada em diversos instrumentos e teoria musical.',
  },
  {
    id: 2,
    title: 'Escola de Ballet',
    description: 'Formação clássica em ballet com professores especializados, promovendo disciplina, expressão artística e elegância.',
  },
]

const images = [
  {
    src: '/academia-360.webp',
    alt: 'Academia 360 - Atividades multidisciplinares',
    title: 'Academia 360'
  },
  {
    src: '/academia-musica.webp',
    alt: 'Academia de Música - Ensino musical',
    title: 'Academia de Música'
  },
  {
    src: '/escola-ballet.webp',
    alt: 'Escola de Ballet - Formação clássica',
    title: 'Escola de Ballet'
  },
]

const currentImageIndex = ref(0)

const setActiveImage = (index: number) => {
  currentImageIndex.value = index
}
</script>

<template>
  <section class="py-16 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-6 gap-16 items-center">
        <!-- Right Column - Content (now first on desktop) -->
        <div class="space-y-8 lg:order-1 lg:col-span-3">
          <!-- Section Label -->
          <div class="flex items-center gap-3">
            <div class="w-8 h-0.5 bg-[#960A23]"></div>
            <span class="text-[#960A23] font-semibold text-sm tracking-wide uppercase">Atividades Extracurriculares</span>
          </div>

          <!-- Main Headline -->
          <h2 class="text-4xl lg:text-5xl font-bold text-[#0B2C70] leading-tight">
            Mais do que ensino,<br />uma experiência completa
          </h2>

          <!-- Description -->
          <p class="text-gray-600 text-lg leading-relaxed">
            No Colégio Dom Diogo de Sousa, acreditamos que a educação vai além da sala de aula.
            As nossas atividades extracurriculares proporcionam oportunidades únicas de desenvolvimento
            pessoal, artístico e físico.
          </p>

          <!-- Activities List -->
          <div class="space-y-4">
            <div
              v-for="activity in activities"
              :key="activity.id"
              class="flex items-start gap-4 group cursor-pointer"
            >
              <div class="w-1 h-12 bg-[#960A23] mt-1"></div>
              <div>
                <h3 class="font-semibold text-[#0B2C70] text-lg group-hover:text-[#960A23] transition-colors">
                  <a
                    v-if="activity.id === 1"
                    href="https://academia360.cdds.pt/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1 hover:underline"
                    aria-label="Academia 360 (abre em nova página)"
                  >
                    Academia 360
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#960A23]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13V19a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6m5-1-7 7"/></svg>
                  </a>
                  <a
                    v-else-if="activity.id === 2"
                    href="https://www.escoladeballetcdds.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1 hover:underline"
                    aria-label="Escola de Ballet (abre em nova página)"
                  >
                    Escola de Ballet
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#960A23]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13V19a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6m5-1-7 7"/></svg>
                  </a>
                  <a
                    v-else-if="activity.id === 3"
                    href="https://academia-musica.cdds.pt/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1 hover:underline"
                    aria-label="Academia de Música (abre em nova página)"
                  >
                    Academia de Música
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#960A23]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 13V19a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6m5-1-7 7"/></svg>
                  </a>
                  <span v-else>{{ activity.title }}</span>
                </h3>
                <p class="text-gray-500 text-sm mb-2">
                  {{ activity.description }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column - Image Gallery with Thumbnails (now second on desktop) -->
        <div class="lg:order-2 lg:col-span-3 space-y-4">
          <!-- Main Image Display -->
          <div class="relative overflow-hidden rounded-lg h-[350px] lg:h-[420px] shadow-md">
            <Transition name="fade" mode="out-in">
              <img
                :key="currentImageIndex"
                :src="images[currentImageIndex].src"
                :alt="images[currentImageIndex].alt"
                class="w-full h-full object-cover"
                loading="lazy"
              />
            </Transition>

            <!-- Image Title Overlay -->
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4">
              <h3 class="text-white font-semibold text-lg">
                {{ images[currentImageIndex].title }}
              </h3>
            </div>
          </div>

          <!-- Thumbnail Stack -->
          <div class="grid grid-cols-3 gap-3">
            <button
              v-for="(image, index) in images"
              :key="index"
              @mouseenter="setActiveImage(index)"
              @click="setActiveImage(index)"
              :class="[
                'relative overflow-hidden rounded-md h-24 lg:h-28 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#960A23] focus:ring-offset-2',
                index === currentImageIndex
                  ? 'ring-2 ring-[#960A23] scale-105 shadow-lg'
                  : 'opacity-70 hover:opacity-100 hover:scale-105 shadow-sm'
              ]"
              :aria-label="`Ver ${image.title}`"
            >
              <img
                :src="image.src"
                :alt="image.alt"
                class="w-full h-full object-cover"
                loading="lazy"
              />

              <!-- Active Indicator -->
              <div
                v-if="index === currentImageIndex"
                class="absolute inset-0 border-2 border-[#960A23] pointer-events-none"
              ></div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.25s ease-in-out;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.fade-enter-to,
.fade-leave-from {
  opacity: 1;
}
</style>
