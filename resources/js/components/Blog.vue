<script setup lang="ts">
import { Calendar, User } from 'lucide-vue-next'
import { Link } from '@inertiajs/vue3'

interface Article {
  id: number
  title: string
  excerpt: string
  image: string
  date: string
  author: string
  slug: string
}

// Sample articles data - this would typically come from props or API
const articles: Article[] = [
  {
    id: 1,
    title: 'Excelência Académica: Os Nossos Alunos Brilham',
    excerpt: 'Conheça as histórias inspiradoras dos nossos alunos que alcançaram resultados excecionais este ano letivo.',
    image: '/slide1.webp',
    date: '2025-10-15',
    author: 'Catarina Vilela',
    slug: 'excelencia-academica'
  },
  {
    id: 2,
    title: 'Projeto Educativo Inovador em Ciências',
    excerpt: 'Descubra como os nossos alunos estão a explorar o mundo da ciência através de metodologias ativas.',
    image: '/slide2.webp',
    date: '2025-10-10',
    author: 'Débora Fernandes',
    slug: 'projeto-educativo-ciencias'
  },
  {
    id: 3,
    title: 'Comunidade CDDS: 75 Anos de História',
    excerpt: 'Celebramos três quartos de século de dedicação à educação de excelência em Portugal.',
    image: '/slide3.webp',
    date: '2025-10-05',
    author: 'Mónica Silva',
    slug: 'comunidade-75-anos'
  }
]

const formatDate = (dateString: string): string => {
  const date = new Date(dateString)
  return date.toLocaleDateString('pt-PT', {
    day: 'numeric',
    month: 'short',
    year: 'numeric'
  })
}
</script>

<template>
  <section class="py-16 bg-white" aria-labelledby="blog-heading">
    <div class="container mx-auto px-4 max-w-7xl">
      <!-- Header -->
      <div class="mb-12 md:mb-16">
        <!-- Section Label with decorative line -->
        <div class="flex items-center gap-3 mb-6">
          <div class="w-8 h-0.5 bg-[#960A23]"></div>
          <span class="text-[#960A23] font-semibold text-sm tracking-wide uppercase">Notícias</span>
        </div>

        <h2 id="blog-heading" class="text-4xl lg:text-5xl font-bold text-[#1C1C1E] leading-tight">
          Todas as notícias, eventos e novidades
        </h2>
      </div>

      <!-- Articles Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
        <article
          v-for="article in articles"
          :key="article.id"
          class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 hover:-translate-y-1 flex flex-col"
        >
          <!-- Article Image -->
          <div class="relative overflow-hidden aspect-[4/3]">
            <img
              :src="article.image"
              :alt="`Imagem do artigo: ${article.title}`"
              class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
              loading="lazy"
            />
          </div>

          <!-- Article Content -->
          <div class="p-6 flex flex-col flex-grow">
            <!-- Meta Information -->
            <div class="flex flex-wrap items-center gap-4 mb-4 text-sm text-[#1C1C1E]">
              <time
                :datetime="article.date"
                class="flex items-center gap-1.5"
              >
                <Calendar :size="16" aria-hidden="true" class="text-[#1C1C1E]" />
                <span>{{ formatDate(article.date) }}</span>
              </time>
              <div class="flex items-center gap-1.5">
                <User :size="16" aria-hidden="true" class="text-[#1C1C1E]" />
                <span>{{ article.author }}</span>
              </div>
            </div>

            <!-- Article Title -->
            <h3 class="text-xl font-bold text-[#1C1C1E] mb-3 line-clamp-2 leading-snug">
              {{ article.title }}
            </h3>

            <!-- Article Excerpt -->
            <p class="text-gray-600 mb-6 line-clamp-3 flex-grow">
              {{ article.excerpt }}
            </p>

            <!-- Read More Button -->
            <Link
              :href="`/blog/${article.slug}`"
              class="inline-flex items-center justify-center px-6 py-2.5 rounded-full border-2 border-[#960A23] text-[#960A23] font-semibold text-sm bg-white hover:bg-[#960A23] hover:text-white transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#960A23] focus:ring-offset-2 self-start"
              :aria-label="`Ler mais sobre ${article.title}`"
            >
              Ler Mais
            </Link>
          </div>
        </article>
      </div>

      <!-- View All Articles Link -->
      <div class="text-center mt-16">
        <Link
          href="/blog"
          class="inline-flex items-center justify-center px-8 py-3 rounded-full bg-[#960A23] text-white font-semibold hover:bg-[#7a0820] transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#960A23] focus:ring-offset-2"
        >
          Ver Mais
        </Link>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Utility for line clamping */
.line-clamp-2 {
  display: -webkit-box;
  -webkit-line-clamp: 2;
  line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
