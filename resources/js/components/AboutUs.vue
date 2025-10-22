<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'
import { Play, ArrowRight, X } from 'lucide-vue-next'

const videoRef = ref<HTMLVideoElement | null>(null)
const isModalOpen = ref(false)
const isPlaying = ref(false)

const openModal = () => {
  isModalOpen.value = true
  document.body.style.overflow = 'hidden' // Prevent body scroll
}

const closeModal = () => {
  isModalOpen.value = false
  isPlaying.value = false
  document.body.style.overflow = '' // Restore body scroll

  // Stop video when closing modal
  if (videoRef.value) {
    videoRef.value.pause()
    videoRef.value.currentTime = 0
  }
}

const handleBackdropClick = (event: MouseEvent) => {
  if (event.target === event.currentTarget) {
    closeModal()
  }
}

const handleVideoPlay = () => {
  isPlaying.value = true
}

const handleVideoPause = () => {
  isPlaying.value = false
}

const handleVideoEnded = () => {
  isPlaying.value = false
}

// Handle escape key to close modal
const handleKeydown = (event: KeyboardEvent) => {
  if (event.key === 'Escape' && isModalOpen.value) {
    closeModal()
  }
}

onMounted(() => {
  document.addEventListener('keydown', handleKeydown)
})

onUnmounted(() => {
  document.removeEventListener('keydown', handleKeydown)
  document.body.style.overflow = '' // Ensure body scroll is restored
})
</script>

<template>
  <section class="py-16 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
      <div class="grid lg:grid-cols-5 gap-16 items-center">
        <!-- Right Column - Content (appears first on mobile) -->
        <div class="space-y-8 lg:order-2 lg:col-span-3">
          <!-- Section Label -->
          <div class="flex items-center gap-3">
            <div class="w-8 h-0.5 bg-burgundy"></div>
            <span class="text-burgundy font-semibold text-sm tracking-wide uppercase">Quem Somos</span>
          </div>

          <!-- Main Headline -->
          <h2 class="text-4xl lg:text-5xl font-bold text-navy leading-tight">
            75 Anos de História
          </h2>

          <!-- Description -->
          <div class="space-y-6">
            <p class="text-gray-600 text-lg leading-relaxed">
              Desde 1949, somos mais do que uma escola: somos uma comunidade onde se formam pessoas,
              valores e futuros. Construímos, ao longo de décadas, um percurso de excelência no ensino
              privado, afirmando-nos como uma referência nacional.
            </p>

            <p class="text-gray-600 text-lg leading-relaxed">
              Hoje, com mais de sete décadas de história, continuamos fiéis à nossa missão: educar com
              paixão, formar com rigor e inspirar gerações que marcam a diferença. Somos o presente,
              comprometidos com o futuro.
            </p>

            <p class="text-gold text-xl font-medium">
              Aprender é mais do que uma conquista — é o caminho para o saber.
            </p>
          </div>

          <!-- CTA Button -->
          <div class="pt-4">
            <button class="inline-flex items-center gap-3 bg-burgundy text-white px-8 py-4 rounded-full font-semibold hover:bg-burgundy-dark transition-all duration-300 group">
              Sobre Nós
              <ArrowRight class="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </button>
          </div>
        </div>

        <!-- Left Column - Video Preview (appears second on mobile) -->
        <div class="relative group cursor-pointer lg:order-1 lg:col-span-2" @click="openModal">
          <!-- Main Video Thumbnail -->
          <div class="relative overflow-hidden rounded-xl shadow-2xl">
            <img
              src="/about-us.webp"
              alt="Vídeo institucional do Colégio Dom Diogo de Sousa"
              class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover"
            />

            <!-- Video Overlay -->
            <div class="absolute inset-0 bg-black/20 transition-opacity duration-300 group-hover:bg-black/10"></div>

            <!-- Play Button -->
            <div class="absolute inset-0 flex items-center justify-center transition-all duration-300">
              <div class="w-20 h-20 bg-burgundy/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-2xl border-4 border-white transition-all duration-300 group-hover:scale-110 group-hover:bg-burgundy">
                <Play class="w-8 h-8 text-white fill-current ml-1" />
              </div>
            </div>
          </div>
          <!-- Video Caption -->
          <div class="mt-4 text-center">
            <p class="text-gray-600 text-sm">
              Clique para assistir ao vídeo institucional
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Modal -->
  <Teleport to="body">
    <Transition
      enter-active-class="transition-opacity duration-300 ease-out"
      enter-from-class="opacity-0"
      enter-to-class="opacity-100"
      leave-active-class="transition-opacity duration-200 ease-in"
      leave-from-class="opacity-100"
      leave-to-class="opacity-0"
    >
      <div
        v-if="isModalOpen"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
        @click="handleBackdropClick"
      >
        <!-- Modal Content -->
        <div class="relative w-full max-w-5xl mx-auto">
          <!-- Close Button -->
          <button
            @click="closeModal"
            class="absolute -top-12 right-0 z-10 p-2 text-white hover:text-gray-300 transition-colors"
            aria-label="Fechar vídeo"
          >
            <X class="w-8 h-8" />
          </button>

          <!-- Video Container -->
          <div class="relative bg-black rounded-lg overflow-hidden shadow-2xl">
            <video
              ref="videoRef"
              src="/CDDS_75_Anos.mp4"
              class="w-full h-auto max-h-[80vh] object-contain"
              controls
              autoplay
              @play="handleVideoPlay"
              @pause="handleVideoPause"
              @ended="handleVideoEnded"
            ></video>
          </div>

          <!-- Video Title -->
          <div class="mt-4 text-center">
            <h3 class="text-white text-xl font-semibold">
              Colégio Dom Diogo de Sousa - 75 Anos de História
            </h3>
          </div>
        </div>
      </div>
    </Transition>
  </Teleport>
</template>

<style scoped>
.text-burgundy {
  color: #960A23;
}

.bg-burgundy {
  background-color: #960A23;
}

.text-navy {
  color: #0B2C70;
}

.text-gold {
  color: #E8BA02;
}


.hover\:bg-burgundy-dark:hover {
  background-color: #7a0820;
}

.group:hover .group-hover\:text-burgundy {
  color: #960A23;
}

.group:hover .group-hover\:translate-x-1 {
  transform: translateX(0.25rem);
}
</style>
